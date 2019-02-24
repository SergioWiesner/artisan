<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .cuerpo {
            width: 575px;
            padding: 1%;
        }

        .tablas {
            width: 100%;
            padding: 1%;
        }

        .logotabla {
            width: 200px;
        }

        .titulosistema {
            text-align: center;
        }

        @page {
            margin: 330px 50px 200px 50px;
        }

        #header {
            position: fixed;
            left: 0px;
            top: -315px;
            right: 0px;
            height: 300px;
            text-align: center;
        }

        #footer {
            position: fixed;
            left: 0px;
            bottom: -200px;
            right: 0px;
            height: 150px;
        }

        #footer .page:after {
            content: counter(page, upper-roman);
        }

        .footertabla, .footertabla tr, .footertabla td {
            border-collapse: collapse;
            border: 1px solid rgba(0, 0, 0, .3);
        }

        .creditosdown p {
            text-align: center;
            font-size: 90%;
        }

        .creditosdown i {
            font-size: 70%;
            text-align: center;
        }


    </style>
</head>
<body>
<div class="cuerpo">
    <div id="header">
        <table class="tablas">
            <tr>
                <td><img src="{{asset(Session::get('configinit')['logosistema'])}}"
                         alt="{{Session::get('configinit')['nombresistema']}}" class="logotabla"></td>
                <td><h1 class="titulosistema">{{Session::get('configinit')['nombresistema']}}</h1></td>
                <td></td>
            </tr>
        </table>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Tipo documento</th>
            <th scope="col">No. documento</th>
            <th scope="col">Nivel acceso</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($data))
            @for($a = 0; $a < count($data); $a++)
                <tr>
                    <th scope="row">{{$a}}</th>
                    <td>{{$data[$a]['name']}}</td>
                    <td>{{$data[$a]['email']}}</td>
                    <td>{{$data[$a]['telefono']}}</td>
                    <td>{{$data[$a]['tipodocumento']['nombre']}}</td>
                    <td>{{$data[$a]['documento']}}</td>
                    <td>{{$data[$a]['nivelaccesso']}}</td>
                </tr>
            @endfor
        @endif
        </tbody>
    </table>
</div>
</body>
<div id="footer">
    <table class="creditosdown">
        <tr>
            <td><p>BOGOTA <br> PBX: 742 7080</p><i>E-mail: ventas@pc.com.co</i></td>
            <td><p>MEDELLIN <br> PBX: 604 0880</p><i>E-mail: ventasmedellin@pc.com.co</i></td>
            <td><p>CALI <br> PBX: 485 4090</p><i>E-mail: ventascali@pc.com.co</i></td>
            <td><p>BARRANQUILLA <br> PBX: 360 1998</p><i>E-mail: ventasbarranquilla@pc.com.co</i></td>
        </tr>
    </table>
    <script type="text/php">
        if (isset($pdf)){
        $x = 280;
        $y = 773;
        $text = "Pagina {PAGE_NUM} de {PAGE_COUNT}";
        $font = $fontMetrics->get_font("Arial", "bold");
        $size = 10;
        $color = array(0,0,0);
        $word_space = 0.0;
        $char_space = 0.0;
        $angle = 0.0;
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        }






    </script>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>
