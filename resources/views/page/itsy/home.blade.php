@extends('page.itsy.index')
@section('pagina')
    <div class="hero" style="background-image: url({{asset('/page/itsy/img/images/lead.jpg')}}); text-align:right;">
        <div class="hero-inner">
            <div class="inner">
                <h1><span class="border border-top border-bottom">{{ config('app.name') }}</span></h1>
                <div class="hero-line-one"></div>
                
            </div>

            <a class="more-arrow" href="#content"><i class="fa fa-chevron-down"></i><span>Scroll Down</span></a>

        </div>
    </div>
    <div class="home-sticky" id="content">

        <h2 class="home-sticky-title">my fave moments</h2>


        <div class="sticky-inner">

            <aside class="home-sticky-post post has-post-thumbnail sticky">

  		    <span class="post-image">
  				<a href="#">
  				<img width="502" height="502" src="{{asset('/page/itsy/images/Lollipop-502x502.jpg')}}"
                     class="attachment-sticky size-sticky" alt=""/>
  				</a>
  		    </span>

                <div class="inner">
                    <h3 class="entry-title">
                        <a href="#">The Lollipop</a>
                    </h3>

                    <ul class="meta top">
                        <li class="time">
                            <a href="#">
                                <time class="post-date updated" datetime="2015-02-02">February 2, 2015</time>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside>

            <aside class="home-sticky-post post has-post-thumbnail sticky ">

            <span class="post-image">
  				<a href="#">
  				<img width="502" height="502" src="{{asset('/page/itsy/images/Apothecary.jpg')}}"
                     class="attachment-sticky size-sticky" alt=""/>
  				</a>
  		    </span>

                <div class="inner">
                    <h3 class="entry-title">
                        <a href="#">The Apothecary</a>
                    </h3>

                    <ul class="meta top">
                        <li class="time">
                            <a href="#"
                               title="The Apothecary">
                                <time class="post-date updated" datetime="2015-01-31">January 31, 2015</time>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside>

            <aside class="home-sticky-post post has-post-thumbnail sticky">

  		    <span class="post-image">
                <a href="#">
                    <img width="502" height="502" src="{{asset('/page/itsy/images/Flowers.jpg')}}"
                         class="attachment-sticky size-sticky" alt=""/>
  				</a>
  		    </span>

                <div class="inner">
                    <h3 class="entry-title">
                        <a href="#">The Flowers</a>
                    </h3>

                    <ul class="meta top">
                        <li class="time">
                            <a href="#">
                                <time class="post-date updated" datetime="2015-01-25">January 25, 2015</time>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside>

            <aside class="home-sticky-post post has-post-thumbnail sticky ">

  		    <span class="post-image">
                <a href="#"><img width="502" height="502" src="{{asset('/page/itsy/images/Sun.jpg')}}"
                                 class="attachment-sticky size-sticky" alt=""/>
  				</a>
            </span>

                <div class="inner">
                    <h3 class="entry-title">
                        <a href="#">The Sunny Day</a>
                    </h3>

                    <ul class="meta top">
                        <li class="time">
                            <a href="#"
                               title="The Sunny Day">
                                <time class="post-date updated" datetime="2015-01-21">January 21, 2015</time>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside>

            <aside class="home-sticky-post post has-post-thumbnail sticky ">


  		    <span class="post-image">
                <a href="#">
                    <img width="502" height="502" src="{{asset('/page/itsy/images/Meeting.jpg')}}"
                         class="attachment-sticky size-sticky" alt=""/>
  				</a>
            </span>

                <div class="inner">
                    <h3 class="entry-title">
                        <a href="#">The Meeting</a>
                    </h3>

                    <ul class="meta top">
                        <li class="time">
                            <a href="#">
                                <time class="post-date updated" datetime="2015-01-02">January 2, 2015</time>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside>

            <aside class="home-sticky-post post has-post-thumbnail sticky ">

            <span class="post-image">
                <a href="#">
                    <img width="502" height="502" src="{{asset('/page/itsy/images/Bridge.jpg')}}"
                         class="attachment-sticky size-sticky" alt=""/>
  				</a>
  		    </span>


                <div class="inner">
                    <h3 class="entry-title">
                        <a href="#">The Bridge</a>
                    </h3>

                    <ul class="meta top">
                        <li class="time">
                            <a href="#">
                                <time class="post-date updated" datetime="2014-12-31">December 31, 2014</time>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside>

        </div>


    </div>
    <div class="wrap full-wrap">
        <div class="main-wrap">
            <section class="main main-archive">
                <div class="loop">


                    <article class="post format-gallery post_format-post-format-gallery">


                        <a href="#"
                           title="Running through Chicago">
                            <div class="part-gallery">
                                <div class="flexslider">
                                    <ul class="slides">

                                        <li><span class="post-image"><img src="{{asset('/page/itsy/images/Run-3.jpg')}}"
                                                                          alt="Run-3"/></span></li>
                                        <li><span class="post-image"><img src="{{asset('/page/itsy/images/Run-1.jpg')}}"
                                                                          alt="Run-1"/></span></li>
                                        <li><span class="post-image"><img src="{{asset('/page/itsy/images/Run-2.jpg')}}"
                                                                          alt="Run-2"/></span></li>
                                    </ul>
                                </div>
                            </div>

                        </a>

                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#"
                                   title="Running through Chicago">
                                    Running through Chicago </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#"
                                       title="Running through Chicago">
                                        <time class="post-date updated" datetime="2015-02-01">February 1, 2015</time>
                                    </a></li>

                                <li class="comments post-tags">
                                    <a href="#">2
                                        Comments</a></li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a
                                                href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus
                                    laoreet
                                    mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis
                                    nec.
                                    Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu
                                    magna
                                    placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu
                                    magna
                                    placerat pulvinar.</p>
                                <blockquote><p>“There are always two people in every picture: the photographer and the
                                        viewer.”<cite>Ansel Adams</cite></p></blockquote>
                                <p>Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat
                                    pulvinar.
                                    Nullam ac odio non ligula semper auctor. Aenean at dui dui, non scelerisque nisi.
                                    Morbi
                                    ullamcorper dapibus nisl, ullamcorper fringilla eros pulvinar et. <a
                                        href="#"
                                        class="more-link">Read More</a></p>
                            </div>


                            <ul class="meta bottom">


                                <li class="cat post-tags">Saved: <a
                                        href="#">Blog</a>,
                                    <a href="#">Fitness</a>
                                </li>


                            </ul>

                        </div>
                    </article>


                    <article class="post format-link has-post-thumbnail post_format-post-format-link">


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#"
                                   title="What a cute template">
                                    What a cute template </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#"
                                       title="What a cute template">
                                        <time class="post-date updated" datetime="2014-11-06">November 6, 2014</time>
                                    </a></li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a></li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a
                                                href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>

                            <div class="part-link">
                                <a class="more-link" href="https://freehtml5.co" title="What a cute template"
                                   target="_self">Visit Website</a>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a
                                        href="#">Blog</a>,
                                    <a href="#"
                                       rel="category tag">Cute</a></li>

                            </ul>

                        </div>
                    </article>


                    <article class="post format-image has-post-thumbnail post_format-post-format-image">




  		            <span class="post-image">
  			  				<a href="#" title="Camper Van Fun">
  			  				    <img width="916" height="611" src="{{asset('/page/itsy/images/Camper-1.jpg')}}"
                                     class="attachment-desktop size-desktop" alt=""/>
                            </a>

  		            </span>


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#"
                                   title="Camper Van Fun">
                                    Camper Van Fun </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#"
                                       title="Camper Van Fun">
                                        <time class="post-date updated" datetime="2014-10-06">October 6, 2014</time>
                                    </a></li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a></li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a
                                                href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus
                                    laoreet
                                    mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis
                                    nec.
                                    Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu
                                    magna
                                    placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu
                                    magna
                                    placerat pulvinar. <a
                                        href="#"
                                        class="more-link">Read More</a></p>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a
                                        href="#">Blog</a>,
                                    <a href="#">Fun</a>
                                </li>

                            </ul>
                        </div>
                    </article>


                    <article class="post format-quote has-post-thumbnail post_format-post-format-quote">


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#"
                                   title="A lovely Quote">
                                    A lovely Quote </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#"
                                       title="A lovely Quote">
                                        <time class="post-date updated" datetime="2014-10-01">October 1, 2014</time>
                                    </a></li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a></li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a
                                                href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <blockquote class="content-quote">
                                    <p>There are always two people in every picture: the photographer and the
                                        viewer.</p>
                                    <cite>Ansel Adams</cite>
                                </blockquote>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a
                                        href="#">Blog</a>,
                                    <a href="#">Fun</a>
                                </li>

                            </ul>

                        </div>
                    </article>


                    <article class="post format-video has-post-thumbnail post_format-post-format-video">


			        <span class="post-image post-video">
                        <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                src="https://player.vimeo.com/video/33091687?portrait=0" frameborder="0"
                                webkitallowfullscreen=""
                                mozallowfullscreen="" allowfullscreen=""></iframe></div>
                    </span>

                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#"
                                   title="What a video">
                                    What a video </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#"
                                       title="What a video">
                                        <time class="post-date updated" datetime="2014-08-31">August 31, 2014</time>
                                    </a></li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a></li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a
                                                href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus
                                    laoreet
                                    mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis
                                    nec.
                                    Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu
                                    magna
                                    placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu
                                    magna
                                    placerat pulvinar. <a
                                        href="#"
                                        class="more-link">Read More</a></p>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a
                                        href="#">Blog</a>,
                                    <a href="#">Fitness</a>,
                                    <a href="#">Fun</a>
                                </li>

                            </ul>

                        </div>
                    </article>


                    <article class="post has-post-thumbnail">


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#"
                                   title="As an aside">
                                    As an aside </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#"
                                       title="As an aside">
                                        <time class="post-date updated" datetime="2014-06-02">June 2, 2014</time>
                                    </a></li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a></li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a
                                                href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p style="text-align: center">Sometimes days seem long sometimes they seem short.</p>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a
                                        href="#">Blog</a>
                                </li>

                            </ul>

                        </div>
                    </article>

                    <article class="post has-post-thumbnail">




  		            <span class="post-image">
  			  				<a href="#" title="The Flower Shop">
  			  				    <img width="916" height="611"
                                     src="{{asset('/page/itsy/images/Flower-Shop.jpg')}}"
                                     class="attachment-desktop size-desktop" alt=""/>
                            </a>
  		            </span>


                        <div class="inner">

                            <h2 class="entry-title">
                                <a href="#"
                                   title="The Flower Shop">
                                    The Flower Shop </a>
                            </h2>
                            <ul class="meta top">
                                <li class="time">
                                    <a href="#"
                                       title="The Flower Shop">
                                        <time class="post-date updated" datetime="2014-05-02">May 2, 2014</time>
                                    </a></li>

                                <li class="comments post-tags">
                                    <a href="#">0
                                        Comments</a></li>

                                <li class="author-m post-tags">
                                    By <span class="vcard author post-author"><span class="fn"><a
                                                href="#"
                                                title="Posts by Clare Smith" rel="author">Clare Smith</a></span></span>
                                </li>

                            </ul>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus
                                    laoreet
                                    mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis
                                    nec.
                                    Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu
                                    magna
                                    placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu
                                    magna
                                    placerat pulvinar.</p>
                                <blockquote><p>“There are always two people in every picture: the photographer and the
                                        viewer.”<cite>Ansel Adams</cite></p></blockquote>
                                <p>Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat
                                    pulvinar.
                                    Nullam ac odio non ligula semper auctor. Aenean at dui dui, non scelerisque nisi.
                                    Morbi
                                    ullamcorper dapibus nisl, ullamcorper fringilla eros pulvinar et. <a
                                        href="#"
                                        class="more-link">Read More</a></p>
                            </div>


                            <ul class="meta bottom">

                                <li class="cat post-tags">Saved: <a
                                        href="#">Blog</a>,
                                    <a href="#"
                                       rel="category tag">Cute</a></li>

                            </ul>

                        </div>
                    </article>

                </div>

            </section>
        </div><!-- /main-wrap -->
    </div><!-- /wrap -->
    <div class="footer-widgets widget-count-4">
        <div class="wrap">
            <div class="mt-about-you-widget">
                <div class="widget footer">
                    <img class="mt-about-avatar" src="{{asset('/page/itsy/images/about-me.jpg')}}" alt="Clare Itsy"/>
                    <h4>Clare Itsy</h4>
                    <div class="mt-about-bio">
                        <p>Hi, my name is Clare and I&#039;m a serial blogger. I love life and more
                            than anything in the whole wide world, I love taking photographs. Oh and did I mention, I
                            quite like
                            blogging?</p>
                    </div>
                </div>
            </div>
            <div class="widget footer"><h4>Recent Posts</h4>
                <ul>
                    <li>
                        <a href="#">The Lollipop</a>
                    </li>
                    <li>
                        <a href="#">Running through Chicago</a>
                    </li>
                    <li>
                        <a href="#">The Apothecary</a>
                    </li>
                    <li>
                        <a href="#">The Flowers</a>
                    </li>
                    <li>
                        <a href="#">The Sunny Day</a>
                    </li>
                </ul>
            </div>
            <div class="widget footer"><h4>Categories</h4>
                <ul>
                    <li class="cat-item cat-item-6">
                        <a href="#" title="A cute little description would go in here">Blog</a>
                    </li>
                    <li class="cat-item cat-item-7">
                        <a href="#" title="A cute little description would go in here">Cute</a>
                    </li>
                    <li class="cat-item cat-item-8">
                        <a href="#">Fitness</a>
                    </li>
                    <li class="cat-item cat-item-9">
                        <a href="#">Fun</a>
                    </li>
                </ul>
            </div>
            <div class="widget footer"><h4>Gallery</h4>
                <div class="textwidget">
                    <img src="{{asset('/page/itsy/images/gallery.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
