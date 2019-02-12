@extends('system.configuracion.configuracion')
@section('configuracionpagina')
    <div class="form-group">
        <label for="listtheme">Lista de plantillas</label>
        <select name="theme" class="form-control" id="listtheme">

        </select>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-10"><input type="text" id="nombreva" class="form-control" name="nombre"
                                          placeholder="Nombre"></div>
            <div class="col-md-2"><input type="button" id="agregartheme" class="btn btn-primary" value="Agregar"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-1"><input type="button" class="btn btn-block btn-sucesses" id="agregartheme"
                                         value="Agregar"></div>
            <div class="col-md-1"><input type="button" class="btn btn-block btn-info" id="actualizartheme"
                                         value="Actualizar"
                                         disabled></div>
            <div class="col-md-1"><input type="button" class="btn btn-block btn-warning" id="eliminartheme"
                                         value="eliminar"
                                         disabled></div>
            <div class="col-md-1"><input type="button" class="btn btn-block btn-primary" id="vertheme" value="Ver"
                                         disabled></div>
            <div class="col-md-2"><input type="button" class="btn btn-block btn-primary" id="guardarvista"
                                         value="Guardar vista"
                                         disabled></div>

        </div>
        <input type="hidden" id="tokenid" name="_token" value="{{csrf_token()}}">

    </div>
    <br>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-4">@include('codliveditor/Pinturas/CssCodliveditor')</div>
            <div class="col-md-4">@include('codliveditor/Pinturas/HtmlCodliveditor')</div>
            <div class="col-md-4">@include('codliveditor/Pinturas/JsCodliveditor')</div>
        </div>
    </form>
    <iframe id="preview" style="width: 100%; height: 80vh;"></iframe>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    {!! $js !!}
    @include('Codliveditor/conf/addon');
@endsection
