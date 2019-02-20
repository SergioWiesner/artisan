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
                        <select class="form-control" id="exampleFormControlSelect1"
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
                        <input type="text" class="form-control"
                               value="" name="documento"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="Nombres">Nombres</label>
                        <input type="text" class="form-control" name="nombre"
                               value=""
                               required>
                    </div>
                    <div class="form-group">
                        <label for="Correos">Correos</label>
                        <input type="email" class="form-control" name="email"
                               value=""
                               required>
                    </div>
                    <div class="form-group">
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" class="form-control" name="password"
                               value=""
                               required>
                    </div>
                    <div class="form-group">
                        <label for="Teléfono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono"
                               value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Dirección">Dirección</label>
                        <input type="text" class="form-control"
                               value="" name="direccion"
                               required>
                    </div>
                </div>
                <div class="col-md-8">
                    <h4 class="titulos">Productos</h4>
                    <div class="form-group">
                        <input type="text" id="busquedaproducto" placeholder="Buscar producto" class="form-control">
                        <p id="log"></p>
                    </div>
                    <hr>
                    <div id="curponuevoproducto">

                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        const buscador = document.getElementById('busquedaproducto');
        const log = document.getElementById('log');
        const bandeja = document.getElementById('curponuevoproducto');
        let lista = [];
        buscador.addEventListener('keyup', logKey);

        function logKey(e) {
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

        function agregarProducto(id) {
            let flag = false;
            let intem;
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
                            let propiedades = "";
                            let options = "";
                            console.log(response);
                            for (let c = 0; c < response.length; c++) {
                                for (let d = 0; d < response[c]['propiedades'].length; d++) {
                                    for (let e = 0; e < response[c]['propiedades'][d]['valores'].length; e++) {
                                        options += "<option value='" + response[c]['propiedades'][d]['valores'][e]['valor'] + "'>" + response[c]['propiedades'][d]['valores'][e]['valor'] + "</option>";
                                    }
                                    propiedades += '<div class="col-md-3"><div class="form-group"><label for="' + response[c]['propiedades'][d]['nombre'] + '">' + response[c]['propiedades'][d]['nombre'] + '</label><select class="form-control" id="' + response[c]['propiedades'][d]['nombre'] + '" name="tipodocumento" required>' + options + '</select></div></div>'
                                }
                                bandeja.innerHTML += '<div class="row" id="pro' + c + '"><a href="#!" onClick="elimnarestad(\'pro' + c + '\')" style="position: absolute; right: 15px; z-index: 100;"><span aria-hidden="true">×</span></a><div class="col-md"><div class="form-group"> <input type="hidden" value="' + response[c]["id"] + '" name="[' + c + '][id]"><br><a href="/productos/ver/' + response[c]["id"] + '" target="_blank"><h5>' + response[c]["nombre"] + '</h5></a></div></div> <div class="col-md-2"><div class="form-group"><label for="Cantidad">Cantidad</label><input type="number" id="cantidadfact' + c + '" class="form-control " precio="' + response[c]["valor"] + '" item="' + c + '" name="[' + c + '][stock]" placeholder="' + response[c]["stock"] + '" required></div></div>' + propiedades + '<div class="col-md"><div class="form-group"><label for="Unidad">Precio U.</label><p>$' + response[c]["valor"] + '</p></div></div><div class="col-md"><div class="form-group"><p id="totalprice' + c + '"></p></div></div></div>';
                                intem = document.getElementById('cantidadfact' + c).addEventListener('keyup', cant);
                            }

                            function cant(e) {
                                console.log();
                                let lugar = this.getAttribute('item');
                                let precio = this.getAttribute('precio');
                                let total = intem.value * precio;
                                console.log("valor multiplicar " + e.value + " por precio " + precio);
                                document.getElementById('totalprice' + lugar).innerText = total;
                                console.log(e);
//                               cantidad.value

                            }
                        }
                    );

            }
        }
    </script>
@endsection
