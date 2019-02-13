@extends('system.configuracion.configuracion')
@section('configuracionpagina')

    <form action="" method="post">
        @csrf
        <div class="row perfilperfiles">
            <div class="col-md-3">
                <h4 class="titulos">Perfiles</h4>
                <hr>
                @if(isset($perfiles))
                    <ul class="nav flex-column">
                        @for($a = 0; $a < count($perfiles); $a++)
                            <li class="nav-item"><a class="nav-link active" href="#">{{$perfiles[$a]['nombre']}}</a>
                            </li>
                        @endfor
                    </ul>
                @endif
            </div>
            <div class="col-md-9">
                <h4 class="titulos">Permisos</h4>
                <hr>
                <div class="row">
                    @if(isset($permiso))
                        @for($b = 0; $b < count($permiso); $b++)
                            <div class="col-md">
                                <div class="form-check">
                                    @for($c = 0; $c < count($relacion[0]['permisos']); $c++)
                                        @if($permiso[$b]['id'] == $relacion[0]['permisos'][$c]['id'])
                                            <input class="form-check-input" type="checkbox" value=""
                                                   name="permiso[{{$a}}]"
                                                   id="{{$permiso[$b]['nombre']}}" checked>
                                        @else
                                            <input class="form-check-input" type="checkbox" value=""
                                                   name="permiso[{{$a}}]"
                                                   id="{{$permiso[$b]['nombre']}}">
                                        @endif
                                    @endfor
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
