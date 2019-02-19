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
                            for (let c = 0; c < response.length; c++) {
                                bandeja.innerHTML += '<div class="row" id="' + c + '"><div class="col-md-3"><div class="form-group"> <input type="hidden" value="' + response[c]["id"] + '" name="[' + c + '][id]"><br><h5>' + response[c]["nombre"] + '</h5></div></div> <div class="col-md-2"><div class="form-group"><label for="Cantidad">Cantidad</label><input type="text" class="form-control" name="[' + c + '][stock]" placeholder="' + response[c]["stock"] + '" required></div></div>';

                            }
                        }
                    );

            }
        }
    </script>
@endsection
