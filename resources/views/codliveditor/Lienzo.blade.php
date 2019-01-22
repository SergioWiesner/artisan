@extends('app')
@section('page')
    <label for="listtheme">Lista de plantillas</label>
    <select name="theme" id="listtheme">

    </select>
    <input type="hidden" id="tokenid" name="_token" value="{{csrf_token()}}">
    <input type="text" id="nombreva" name="nombre" placeholder="Nombre">
    <input type="button" id="agregartheme" value="Agregar">
    <input type="button" id="actualizartheme" value="Actualizar" disabled>
    <input type="button" id="eliminartheme" value="eliminar" disabled>
    <input type="button" id="vertheme" value="Ver" disabled>
    <input type="button" id="guardarvista" value="Guardar vista" disabled>
    <br>
    <form action="" method="post">
        @include('Codliveditor/Pinturas/CssCodliveditor')
        @include('Codliveditor/Pinturas/HtmlCodliveditor')
        @include('Codliveditor/Pinturas/JsCodliveditor')
    </form>
    <iframe id="preview" style="width: 100%; height: 80vh;"></iframe>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    {!! $js !!}
    @include('Codliveditor/conf/addon');
@endsection
