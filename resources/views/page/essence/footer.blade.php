<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area d-flex mb-30">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="/"><img src="{{asset(Session::get('configuracionpublica')['logosistema'])}}"
                                         class="lazy"
                                         data-original="{{asset(Session::get('configuracionpublica')['logosistema'])}}"
                                         alt="{{Session::get('configuracionpublica')['nombresistema']}}"
                                         width="50px"></a>
                    </div>
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{route('categorias')}}">Tienda</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="{{route('contactenos')}}">Contactenos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area mb-30">
                    <ul class="footer_widget_menu">
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">¿como comprar?</a></li>
                        <li><a href="#">Shipping and Delivery</a></li>
                        <li><a href="#">Guias</a></li>
                        <li><a href="#">Politicas de privacidad</a></li>
                        <li><a href="{{route('terminosycondiciones')}}">Terminos de usos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row align-items-end">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_heading mb-30">
                        <h6>Subscribe</h6>
                    </div>
                    <div class="subscribtion_form">
                        <form action="#" method="post">
                            <input type="email" name="mail" class="mail" placeholder="Your email here">
                            <button type="submit" class="submit"><i class="fa fa-long-arrow-right"
                                                                    aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_social_area">
                        <a href="https://www.facebook.com/capitalana.store/?modal=admin_todo_tour" data-toggle="tooltip"
                           data-placement="top" title="Facebook"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/capitalana.store/" data-toggle="tooltip" data-placement="top"
                           title="Instagram"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    Desarrollado con mucho <i class="fa fa-heart-o" aria-hidden="true"></i> por
                    <a href="https://codwelt.com" target="_blank">codwelt</a>
                </p>
            </div>
        </div>

    </div>
</footer>
<!-- ##### Footer Area End ##### -->
<!-- Popper js -->

<script src="{{asset('page/essence/js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('page/essence/js/bootstrap.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('page/essence/js/plugins.js')}}"></script>
<!-- Classy Nav js -->
<script src="{{asset('page/essence/js/classy-nav.min.js')}}"></script>
<!-- Active js -->
<script src="{{asset('page/essence/js/active.js')}}"></script>

</body>

</html>
