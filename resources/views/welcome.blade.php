@extends('layouts.app')

@section('content')
    <div class="parallax-banner margin-b-60" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h1>Коротко про нас</h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis
                        varius. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in
                        venenatis. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in
                        venenatis.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 margin-b-30">
                <a class="image-box" href="blog.html">
                    <img src="images/img-1.jpg" alt="" class="img-responsive">
                    <div class="img-overlay">
                        <h1>Latest news</h1>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 margin-b-30">
                <a class="image-box" href="about.html">
                    <img src="images/img-3.jpg" alt="" class="img-responsive">
                    <div class="img-overlay">
                        <h1>Our Store</h1>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 margin-b-30">
                <a class="image-box" href="cat-grid-2col.html">
                    <img src="images/img-2.jpg" alt="" class="img-responsive">
                    <div class="img-overlay">
                        <h1>Products</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="space-80"></div>
    <div class="testimonials">
        <div class="testi-slider owl-carousel owl-theme">
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p>
                                " It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout.
                                "
                            </p>
                            <h4>Steven Smith
                                <small>Boland customer</small>
                            </h4>
                        </div>
                    </div>
                </div>
            </div><!--item-->
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p>
                                " There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form "
                            </p>
                            <h4>John Doe
                                <small>Boland customer</small>
                            </h4>
                        </div>
                    </div>
                </div>
            </div><!--item-->
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout.
                            </p>
                            <h4>Steven Smith
                                <small>Boland customer</small>
                            </h4>
                        </div>
                    </div>
                </div>
            </div><!--item-->
        </div>
    </div><!--/testimonials-->
    <div class="space-80"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 margin-b-30">
                <h3 class="text-capitalize margin-b-40"> Останні новини</h3>
                <ul class="quick-news-list list-unstyled">
                    <li class="clearfix">
                        <div class="date">
                            <span>03</span>
                            Dec
                        </div>
                        <div class="content">
                            <a href="#">
                                <h4>
                                    Boland Shop Flat 50% Off on new Arrivals
                                </h4>
                            </a>
                            <ul class="list-inline quick-meta">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">22 Comments</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="date">
                            <span>23</span>
                            Dec
                        </div>
                        <div class="content">
                            <a href="#">
                                <h4>
                                    Awesome post title goes here
                                </h4>
                            </a>
                            <ul class="list-inline quick-meta">
                                <li><a href="#">Decor</a></li>
                                <li><a href="#">27 Comments</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="date">
                            <span>21</span>
                            Jan
                        </div>
                        <div class="content">
                            <a href="#">
                                <h4>
                                    This text will easily change
                                </h4>
                            </a>
                            <ul class="list-inline quick-meta">
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">07 Comments</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 margin-b-30">
                <h3 class="text-capitalize margin-b-40"> Підпишіться на новини</h3>
                <form class="form-newsletter-lg">
                    <p class="margin-b-20">
                        Subscribe to the Boland mailing list to receive updates on new arrivals, special offers and
                        other discount information
                    </p>
                    <input type="email" class="form-control margin-b-20" placeholder="Enter Email Here" required="">
                    <input type="submit" class="btn btn-link" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!--page template scripts-->
    <script src="plugins/masterslider/masterslider.min.js"></script>
    <script>
        (function ($) {
            "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.

            slider.control('timebar', {insertTo: '#masterslider'});
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1170, // slider standard width
                height: 510, // slider standard height
                space: 0,
                layout: 'fullwidth',
                loop: true,
                preload: 0,
                instantStartLayers: true,
                autoplay: true
            });
        })(jQuery);
    </script>
@endsection