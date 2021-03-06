@extends('page.v1.index')
@section('pagina')
    <!--=====================================
=            Homepage Banner            =
======================================-->
    <section class="banner bg-1" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-self-center">
                    <!-- Contents -->
                    <div class="content-block">
                        <h1>Lo mejor para artesanos</h1>
                        <h5>Mejora el rendimiento de tu negocio con un camino simple</h5>
                        <!-- App Badge -->
                        <div class="app-badge">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#"><img class="img-fluid"
                                                     src="{{asset('page/images/app-badge/google-play.png')}}"
                                                     alt="google-play"></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><img class="img-fluid"
                                                     src="{{asset('page/images/app-badge/app-store.png')}}"
                                                     alt="app-store"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- App Image -->
                    <div class="image-block">
                        <img class="img-fluid" src="{{asset('page/images/phones/iphone-banner.png')}}"
                             alt="iphone-banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Homepage Banner  ====-->

    <!--===========================
    =            About            =
    ============================-->

    <section class="about section bg-2" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mr-auto">
                    <!-- Image Content -->
                    <div class="image-block">
                        <img src="{{asset('page/images/phones/iphone-feature.png')}}" alt="iphone-feature"
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 m-md-auto align-self-center ml-auto">
                    <div class="about-block">
                        <!-- About 01 -->
                        <div class="about-item">
                            <div class="icon">
                                <i class="tf-ion-ios-paper-outline"></i>
                            </div>
                            <div class="content">
                                <h5>Creative Design</h5>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising
                                    pain was born and I will give you a complete accounta</p>
                            </div>
                        </div>
                        <!-- About 02 -->
                        <div class="about-item active">
                            <div class="icon">
                                <i class="tf-globe"></i>
                            </div>
                            <div class="content">
                                <h5>Easy to Use</h5>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising
                                    pain was born and I will give you a complete accounta</p>
                            </div>
                        </div>
                        <!-- About 03 -->
                        <div class="about-item">
                            <div class="icon">
                                <i class="tf-circle-compass"></i>
                            </div>
                            <div class="content">
                                <h5>Best User Experience</h5>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising
                                    pain was born and I will give you a complete accounta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of About  ====-->

    <!--==============================
    =            Features            =
    ===============================-->

    <section class="section feature" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>App Features</h2>
                        <p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                            foresee idea of denouncing pleasure and praising</p>
                    </div>
                </div>
            </div>
            <div class="row bg-elipse">
                <div class="col-lg-4 align-self-center text-center text-lg-right">
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="tf-circle-compass"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>Beautiful Interface Design</h5>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                praising</p>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="tf-tools-2"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>Unlimited Features</h5>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                praising</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <!-- Feature Item -->
                    <div class="feature-item mb-0">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="tf-chat"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>Full free chat</h5>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                praising</p>
                        </div>
                    </div>
                    <div class="app-screen">
                        <img class="img-fluid" src="{{asset('page/images/phones/i-phone-screen.png')}}"
                             alt="app-screen">
                    </div>
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="tf-hourglass"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>24/7 support by real people</h5>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                praising</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-left align-self-center">
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="tf-mobile"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>Retina ready greaphics</h5>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                praising</p>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <div class="feature-item">
                        <!-- Icon -->
                        <div class="icon">
                            <i class="tf-layers"></i>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <h5>IOS & android version </h5>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                praising</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Features  ====-->

    <!--=================================
    =            Promo Video            =
    ==================================-->

    <section class="section promo-video bg-3 overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Promo Video -->
                    <div class="video">
                        <img class="img-fluid" src="{{asset('page/images/backgrounds/promo-video-bg.jpg')}}"
                             alt="video-thumbnail">
                        <div class="video-button video-box">
                            <!-- Video Play Button -->
                            <a href="javascript:void(0)">
							<span class="icon" data-video="https://www.youtube.com/embed/g3-VxLQO7do?autoplay=1">
								<i class="tf-ion-ios-play-outline"></i>
							</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Promo Video  ====-->

    <!--===================================
    =            Pricing Table            =
    ====================================-->

    <section class="pricing section bg-shape" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Choose Your Subscription Plan</h2>
                        <p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                            foresee idea of denouncing pleasure and praising</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Table -->
                    <div class="pricing-table text-center">
                        <!-- Title -->
                        <div class="title">
                            <h5>Free</h5>
                        </div>
                        <!-- Price Tag -->
                        <div class="price">
                            <p>$0<span>/month</span></p>
                        </div>
                        <!-- Features -->
                        <ul class="feature-list">
                            <li>Android App</li>
                            <li>One time payment</li>
                            <li>Build & Publish</li>
                            <li>Life time support</li>
                        </ul>
                        <!-- Take Action -->
                        <div class="action-button">
                            <a href="" class="btn btn-main-rounded">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Table -->
                    <div class="pricing-table featured text-center">
                        <!-- Title -->
                        <div class="title">
                            <h5>Basic</h5>
                        </div>
                        <!-- Price Tag -->
                        <div class="price">
                            <p>$19<span>/month</span></p>
                        </div>
                        <!-- Features -->
                        <ul class="feature-list">
                            <li>Android App</li>
                            <li>One time payment</li>
                            <li>Build & Publish</li>
                            <li>Life time support</li>
                        </ul>
                        <!-- Take Action -->
                        <div class="action-button">
                            <a href="" class="btn btn-main-rounded">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-md-auto">
                    <!-- Pricing Table -->
                    <div class="pricing-table text-center">
                        <!-- Title -->
                        <div class="title">
                            <h5>Advance</h5>
                        </div>
                        <!-- Price Tag -->
                        <div class="price">
                            <p>$99<span>/month</span></p>
                        </div>
                        <!-- Features -->
                        <ul class="feature-list">
                            <li>Android App</li>
                            <li>One time payment</li>
                            <li>Build & Publish</li>
                            <li>Life time support</li>
                        </ul>
                        <!-- Take Action -->
                        <div class="action-button">
                            <a href="" class="btn btn-main-rounded">Start Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Pricing Table  ====-->

    <!--=============================================
    =            Call to Action Download            =
    ==============================================-->

    <section class="cta-download bg-3 overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="image-block"><img class="img-fluid"
                                                  src="{{asset('page/images/phones/iphone-chat.png')}}"
                                                  alt=""></div>
                </div>
                <div class="col-lg-7">
                    <div class="content-block">
                        <!-- Title -->
                        <h2>Free Download Now</h2>
                        <!-- Desctcription -->
                        <p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                            foresee idea of denouncing pleasure and praising</p>
                        <!-- App Badge -->
                        <div class="app-badge">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#"><img class="img-fluid"
                                                     src="{{asset('page/images/app-badge/google-play.png')}}"
                                                     alt="google-play"></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><img class="img-fluid"
                                                     src="{{asset('page/images/app-badge/app-store.png')}}"
                                                     alt="app-store"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Call to Action Download  ====-->

    <!--=============================
    =            Counter            =
    ==============================-->

    <section class="section counter bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <!-- Counter Number -->
                        <h3>29k</h3>
                        <!-- Counter Name -->
                        <p>Download</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <!-- Counter Number -->
                        <h3>200k</h3>
                        <!-- Counter Name -->
                        <p>Active Account</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <!-- Counter Number -->
                        <h3>60k</h3>
                        <!-- Counter Name -->
                        <p>Happy User</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <!-- Counter Number -->
                        <h3>300k<sup>+</sup></h3>
                        <!-- Counter Name -->
                        <p>Download</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Counter  ====-->

    <!--==========================
    =            Team            =
    ===========================-->

    <section class="section team bg-shape-two" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Creative Team</h2>
                        <p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                            foresee idea of denouncing pleasure and praising</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member -->
                    <div class="team-member text-center">
                        <div class="image">
                            <img class="img-fluid" src="{{asset('page/images/team/member-one.jpg')}}" alt="team-member">
                        </div>
                        <div class="name">
                            <h5>Johnny Depp</h5>
                        </div>
                        <div class="position">
                            <p>Production Designer</p>
                        </div>
                        <div class="skill-bar">
                            <div class="progress" data-percent="85%">
                                <div class="progress-bar"></div>
                            </div>
                            <span>85%</span>
                        </div>
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-instagram-outline"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member -->
                    <div class="team-member text-center">
                        <div class="image">
                            <img class="img-fluid" src="{{asset('page/images/team/member-two.jpg')}}" alt="team-member">
                        </div>
                        <div class="name">
                            <h5>cristin milioti</h5>
                        </div>
                        <div class="position">
                            <p>UX Researcher</p>
                        </div>
                        <div class="skill-bar">
                            <div class="progress" data-percent="95%">
                                <div class="progress-bar"></div>
                            </div>
                            <span>95%</span>
                        </div>
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-instagram-outline"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member -->
                    <div class="team-member text-center">
                        <div class="image">
                            <img class="img-fluid" src="{{asset('page/images/team/member-three.jpg')}}"
                                 alt="team-member">
                        </div>
                        <div class="name">
                            <h5>john doe</h5>
                        </div>
                        <div class="position">
                            <p>Head of Ideas</p>
                        </div>
                        <div class="skill-bar">
                            <div class="progress" data-percent="80%">
                                <div class="progress-bar"></div>
                            </div>
                            <span>80%</span>
                        </div>
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-instagram-outline"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member -->
                    <div class="team-member text-center">
                        <div class="image">
                            <img class="img-fluid" src="{{asset('page/images/team/member-four.jpg')}}"
                                 alt="team-member">
                        </div>
                        <div class="name">
                            <h5>mario gotze</h5>
                        </div>
                        <div class="position">
                            <p>UX/UI designer</p>
                        </div>
                        <div class="skill-bar">
                            <div class="progress" data-percent="75%">
                                <div class="progress-bar"></div>
                            </div>
                            <span>75%</span>
                        </div>
                        <ul class="social-icons list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="tf-ion-social-instagram-outline"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Team  ====-->

    <!--=================================
    =            Testimonial            =
    ==================================-->

    <section class="section testimonial bg-primary-shape" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="text-white">Our Happy Customers</h2>
                        <p class="text-white">Demoralized by the charms of pleasure of the moment, so blinded by desire,
                            that they cannot foresee idea of denouncing pleasure and praising</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 m-auto">
                    <!-- Testimonial Carosel -->
                    <div class="testimonial-slider">
                        <!-- testimonial item -->
                        <div class="testimonial-item">
                            <div class="content">
                                <div class="name">
                                    <h5>Kris lazy Cistin Miloti</h5>
                                </div>
                                <div class="pos-in-com">
                                    <p>CEO at <span>Themefisher</span></p>
                                </div>
                                <div class="speech">
                                    <p>Explain to you how all this mistaken idea of denouncing tis pleasure and praising
                                        pain was born and I will give you a complete praising the account is account
                                        the. </p>
                                </div>
                                <ul class="rating list-inline">
                                    <li class="list-inline-item">
                                        <i class="tf-ion-android-star"></i>
                                        <i class="tf-ion-android-star"></i>
                                        <i class="tf-ion-android-star"></i>
                                        <i class="tf-ion-android-star"></i>
                                        <i class="tf-ion-android-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="image">
                                <img class="img-fluid" src="{{asset('page/images/testimonial/review-person-one.png')}}"
                                     alt="testimonial-person">
                            </div>
                        </div>
                        <!-- testimonial item -->
                        <div class="testimonial-item">
                            <div class="content">
                                <div class="name">
                                    <h5>Kris lazy Cistin Miloti</h5>
                                </div>
                                <div class="pos-in-com">
                                    <p>CEO at<span>Themefisher</span></p>
                                </div>
                                <div class="speech">
                                    <p>Explain to you how all this mistaken idea of denouncing tis pleasure and praising
                                        pain was born and I will give you a complete praising the account is account
                                        the. </p>
                                </div>
                                <div class="rating">
                                    <ul class="rating list-inline">
                                        <li class="list-inline-item">
                                            <i class="tf-ion-android-star"></i>
                                            <i class="tf-ion-android-star"></i>
                                            <i class="tf-ion-android-star"></i>
                                            <i class="tf-ion-android-star"></i>
                                            <i class="tf-ion-android-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image">
                                <img class="img-fluid" src="{{asset('page/images/testimonial/review-person-one.png')}}"
                                     alt="testimonial-person">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====  End of Testimonial  ====-->

    <section class="section cta-subscribe" id="contact">
        <div class="container">
            <div class="row bg-elipse-red">
                <div class="col-lg-4">
                    <div class="image"><img src="{{asset('page/images/phones/iphone-banner.png')}}" alt="iphone-app">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="content">
                        <div class="title">
                            <h2>Subscribe Our Newsletter</h2>
                        </div>
                        <div class="description">
                            <p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                cannot
                                foresee idea of denouncing pleasure and praising</p>
                        </div>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control main" placeholder="Enter your email address">
                                <span class="input-group-addon tf-ion-android-send" id="btnGroupAddon"></span>
                            </div>
                        </form>
                        <div class="subscription-tag text-right">
                            <p>Subscribe To Our Newsletter & Stay Updated</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
