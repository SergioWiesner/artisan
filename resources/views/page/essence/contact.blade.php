@extends('page.essence.index')
@section('pagina')
    
    <div class="contact-area d-flex align-items-center">

        <div class="google-map">
            <img src="{{asset('img/fondo1.jpg')}}" alt="">
        </div>

        <div class="contact-info">
            <h2>¿Como encontrarnos?</h2>
            <p>Nosotros somos una tienda virtual que promueve la venta de artículos artesanales en todos los países de
                habla hispana. </p>

            <div class="contact-address mt-50">

                <p><span>Teléfono :</span> +57 3203368199</p>
                <p><a href="mailto:admin@capitalana.com">admin@capitalana.com</a></p>
            </div>
        </div>

    </div>

@endsection
