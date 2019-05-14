@extends('system.configuracion.configuracion')
@section('configuracionpagina')
    <form action="{{route('perfilespermisos')}}" method="post">
        @csrf
        <div class="row perfilperfiles">
            <div class="col-md-3">
                <h4 class="titulos">Perfiles</h4>
                <hr>
                @if(isset($perfiles))
                    <ul class="nav flex-column">
                        @for($a = 0; $a < count($perfiles); $a++)
                            <li class="nav-item"><a class="nav-link active"
                                                    href="{{route('permisosperfiles', ['id' => $perfiles[$a]['id']])}}">{{$perfiles[$a]['nombre']}}</a>
                            </li>
                        @endfor
                    </ul>
                @endif
            </div>
            <div class="col-md-9">
                <h4 class="titulos">Permisos</h4>
                <hr>
                <div class="row">
                    @if(!is_null($perfilactual))
                        <input type="hidden" name="perfil" value="{{$perfilactual}}">
                    @endif
                    @if(isset($permiso))
                        @for($b = 0; $b < count($permiso); $b++)
                            <div class="col-md">
                                <div class="form-check">
                                    @if(!is_null($relacion[0]['permisos']) && count($relacion[0]['permisos']) > 0)
                                        @for($c = 0; $c < count($relacion[0]['permisos']); $c++)
                                            @if($permiso[$b]['id'] == $relacion[0]['permisos'][$c]['id'] )
                                                <input class="form-check-input" type="checkbox"
                                                       value="{{$permiso[$b]['id']}}"
                                                       name="permiso[]"
                                                       id="{{$permiso[$b]['nombre']}}" checked>
                                                @php
                                                    $c = count($relacion[0]['permisos']);
                                                @endphp
                                            @else
                                                <input class="form-check-input" type="checkbox"
                                                       value="{{$permiso[$b]['id']}}"
                                                       name="permiso[]"
                                                       id="{{$permiso[$b]['nombre']}}">
                                            @endif
                                        @endfor
                                    @else
                                        <input class="form-check-input" type="checkbox" value="{{$permiso[$b]['id']}}"
                                               name="permiso[]"
                                               id="{{$permiso[$b]['nombre']}}">
                                    @endif
                                    <label class="form-check-label" for="{{$permiso[$b]['nombre']}}">
                                        {{$permiso[$b]['nombre']}}
                                    </label>
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Actualizar">
    </form>
@endsection
