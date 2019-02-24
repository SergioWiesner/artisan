@extends('system.ventas.ventas')
@section('contentventas')
    <div class="container-fluid">

        <form action="{{route('usuarioscrear')}}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="titulos">Nueva venta</h3>
                </div>
                <div class="col-md-4">
                    <h4 class="titulos">Cliente</h4>
                    <hr>
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo documento</label>
                        <select class="form-control" id="tipodocumento"
                                name="tipodocumento"
                                required>

                            <option selected></option>
                            @for($b = 0; $b < count($documentos); $b++)
                                <option
                                    value="{{$documentos[$b]['id']}}">{{$documentos[$b]['nombre']}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Documento">Documento</label>
                        <input type="text" class="form-control" name="documento" id="documentoBuscar" required>
                        <p id="logdocumento"></p>
                    </div>
                    <div class="form-group">
                        <label for="Nombres">Nombres</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="Correos">Correos</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="Teléfono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="Dirección">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary" value="Generar factura">
                    </div>
                </div>
                <div class="col-md-8">
                    <h4 class="titulos">Productos</h4>
                    <div class="form-group" id="Buscadorproductos">
                        <input type="text" id="busquedaproducto" placeholder="Buscar producto" class="form-control">
                        <p id="log"></p>
                    </div>
                    <hr>
                    <div id="curponuevoproducto" style="width: 100%; padding: 2%;">

                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-2"><h5>Subtotal</h5></div>
                        <div class="col-md-8"><p id="subtotaltotal"></p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-2"><h5>Total</h5></div>
                        <div class="col-md-8"><p id="total"></p></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        const buscador = document.getElementById('busquedaproducto');
        const log = document.getElementById('log');
        const logdocumento = document.getElementById('logdocumento');
        const bandeja = document.getElementById('curponuevoproducto');
        const documento = document.getElementById('documentoBuscar');
        let lista = [];

        buscador.addEventListener('keyup', logKey);
        documento.addEventListener('keyup', documente);

        function documente() {
            if (documento.value !== "") {
                var data = {
                    tipodocumento: document.getElementById('tipodocumento').value,
                    documento: documento.value
                };
                fetch('/buscar/usuario/documento', {
                    method: 'POST', // or 'PUT'
                    body: JSON.stringify(data), // data can be `string` or {object}!
                    headers: {
                        'Content-Type': 'application/json'
                    }
                }).then(res => res.json())
                    .catch(error => console.error('Error:', error))
                    .then(response => {
                        logdocumento.innerHTML = "";
                        for (let a = 0; a < response.length; a++) {
                            logdocumento.innerHTML += "<a class='agregarproducto agregarproductoestilo' href='#!' onclick='traerusuario(" + response[a]['documento'] + ", " + response[a]['tipodocumento'] + ")'><i class='fas fa-plus'></i> " + response[a]['documento'] + "</a>";
                        }
                    });
            } else {
                logdocumento.innerHTML = "";
            }
        }

        function traerusuario(documentobus, tipodocumentobus) {
            while (logdocumento.hasChildNodes()) {
                logdocumento.removeChild(logdocumento.firstChild);
            }
            var data = {
                tipodocumento: tipodocumentobus,
                documento: documentobus
            };
            fetch('/buscar/usuario/documento', {
                method: 'POST', // or 'PUT'
                body: JSON.stringify(data), // data can be `string` or {object}!
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(res => res.json())
                .catch(error => console.error('Error:', error))
                .then(response => {
                    console.log(response);
                    logdocumento.innerHTML = "";
                    for (let a = 0; a < response.length; a++) {
                        document.getElementById('nombre').value = response[a]['name'];
                        document.getElementById('email').value = response[a]['email'];
                        document.getElementById('telefono').value = response[a]['telefono'];
                        document.getElementById('direccion').value = response[a]['direccion'];
                    }
                });
        }

        function logKey() {
            if (buscador.value !== "") {
                var data = {valor: buscador.value};
                fetch('/buscar/productos', {
                    method: 'POST', // or 'PUT'
                    body: JSON.stringify(data), // data can be `string` or {object}!
                    headers: {
                        'Content-Type': 'application/json'
                    }
                }).then(res => res.json())
                    .catch(error => console.error('Error:', error))
                    .then(response => {
                        log.innerHTML = "";
                        for (let a = 0; a < response.length; a++) {
                            log.innerHTML += "<a class='agregarproducto agregarproductoestilo' href='#!' onclick='agregarProducto(" + response[a]['id'] + ")'><i class='fas fa-plus'></i> " + response[a]['nombre'] + "</a>";
                        }
                    });
            } else {
                log.innerHTML = "";
            }
        }

        let calc = function calculo() {
            let lugar = this.getAttribute('item');
            let precio = this.getAttribute('precio');
            let total = this.value * precio;
            //document.getElementById("text2").value=document.getElementById("text1").value;
            console.log("valor multiplicar " + this.value + " por precio " + precio);
            if (!isNaN(total)) {
                document.getElementById('totalprice' + lugar).innerText = "$" + new Intl.NumberFormat("COP-CO").format(total);
            } else {
                document.getElementById('totalprice' + lugar).innerText = "$0";
            }
        }

        let contpro = 0;

        function elimnaproducto(ident, id) {
            lista.splice(lista.indexOf(id), 1)
            let ele = document.getElementById(ident);
            ele.remove();
        }

        function cambiodeprecios(idselect) {
            var data = {id: document.getElementById(idselect).value};
            fetch('/buscar/propiedad/producto/id', {
                method: 'POST', // or 'PUT'
                body: JSON.stringify(data), // data can be `string` or {object}!
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(res => res.json())
                .catch(error => console.error('Error:', error))
                .then(response => {
                    console.log(response);


                });
        }

        function agregarProducto(id) {
            while (log.hasChildNodes()) {
                log.removeChild(log.firstChild);
            }

            buscador.value = "";
            let flag = false;
            if (lista.length > 0) {
                for (let b = 0; b < lista.length; b++) {
                    if (lista[b] == id) {
                        flag = true;
                    }
                }
            }

            if (flag != true) {
                lista.push(id);
                var data = {valor: id};
                fetch('/buscar/productos/id', {
                    method: 'POST', // or 'PUT'
                    body: JSON.stringify(data), // data can be `string` or {object}!
                    headers: {
                        'Content-Type': 'application/json'
                    }
                }).then(res => res.json())
                    .catch(error => console.error('Error:', error))
                    .then(response => {
                        console.log(response);
                        let propiedades = "";
                        let options = "";
                        let acumuladostock = 0;
                        for (let c = 0; c < response.length; c++) {
                            acumuladostock = response[c]['stock'];
                            for (let d = 0; d < response[c]['propiedades'].length; d++) {
                                options = "";
                                for (let e = 0; e < response[c]['propiedades'][d]['valores'].length; e++) {
                                    options += "<option value='" + response[c]['propiedades'][d]['valores'][e]['id'] + "'>" + response[c]['propiedades'][d]['valores'][e]['valor'] + "</option>";
                                    acumuladostock += response[c]['propiedades'][d]['valores'][e]['stock'];
                                }
                                propiedades += '<div class="col-md-3"><div class="form-group"><label for="' + response[c]['propiedades'][d]['nombre'] + '">' + response[c]['propiedades'][d]['nombre'] + '</label><select class="form-control" onchange="cambiodeprecios(\'' + response[c]['propiedades'][d]['nombre'] + d + '\')" id="' + response[c]['propiedades'][d]['nombre'] + d + '" name="tipodocumento" required><option></option>' + options + '</select></div></div>';
                            }
                            elChild = document.createElement('div');
                            elChild.innerHTML = '<div class="row productostiend" id="pro' + contpro + '"><div class="col-md-12"><div class="row"><a href="#!" onClick="elimnaproducto(\'pro' + contpro + '\', ' + id + ')" style="position: absolute; right: 15px; z-index: 100;" class="vermasproductos"><span aria-hidden="true">×</span></a><div class="col-md"><div class="form-group"> <input type="hidden" value="' + response[c]["id"] + '" name="[' + c + '][id]"><label for="Cantidad">Nombre</label><a href="/productos/ver/' + response[c]["id"] + '" class="vermasproductos" target="_blank"><h5>' + response[c]["nombre"] + '</h5></a></div></div> <div class="col-md-2"><div class="form-group"><label for="Cantidad">Cantidad</label><input type="text" id="cantidadfact' + contpro + '" class="form-control" precio="' + response[c]["valor"] + '" item="' + contpro + '" name="[' + c + '][stock]" placeholder="' + acumuladostock + '" required></div></div><div class="col-md"><div class="form-group"><label for="Unidad">Precio U.</label><p>$' + new Intl.NumberFormat("COP-CO").format(response[c]["valor"]) + '</p></div></div><div class="col-md"><div class="form-group"><label>Subtotal</label><p id="totalprice' + contpro + '"></p></div></div></div><div class="col-md-12"><div class="row">' + propiedades + '</div></div></div></div>';
                            bandeja.appendChild(elChild);
                        }
                        document.getElementById('cantidadfact' + contpro).addEventListener('keyup', calc);
                    });
            }
            contpro++;
        }
    </script>
@endsection
