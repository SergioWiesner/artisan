@extends('system.configuracion.configuracion')
@section('configuracionpagina')
    <div class="row">
        <div class="col-md-6">
            <h3 class="titulos">Clientes creados</h3>
            <hr>
            @if(count($clientes) > 0)
                <ul>
                    @for($a = 0; $a < count($clientes); $a++)
                        <li>{{$clientes[$a]['name']}}</li>
                    @endfor
                </ul>
            @endif
        </div>
        <div class="col-md-6">
            <h3 class="titulos">Creación de cliente para api</h3>
            <hr>
            <form action="{{route('passport.clients.store')}}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="pagdeta">Nombre Cliente</label>
                        <input type="text" class="form-control" name="name" id="pagdeta">
                    </div>
                    <div class="form-group col-md">
                        <label for="redirect">Redireción</label>
                        <input type="text" class="form-control" name="redirect" id="redirect">
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Actualizar">
            </form>
        </div>
    </div>
@endsection
