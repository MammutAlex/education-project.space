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
        <h3 class="text-uppercase font-400 title-font text-center margin-b-30">Напрямки</h3>
        <div class="product-slider owl-carousel owl-theme">
            <div class="item">
                <a class="category-box" href="#">
                    <img src="images/products/p2.jpg" alt="" class="img-responsive">
                    <div class="category-text">
                        <h4 class="text-uppercase">Діти</h4>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </a><!--/category-box-->
            </div><!--/item-->
            <div class="item">
                <a class="category-box" href="#">
                    <img src="images/products/p4.jpg" alt="" class="img-responsive">
                    <div class="category-text">
                        <h4 class="text-uppercase">Школярі</h4>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </a><!--/category-box-->
            </div><!--/item-->
            <div class="item">
                <a class="category-box" href="#">
                    <img src="images/products/p12.jpg" alt="" class="img-responsive">
                    <div class="category-text">
                        <h4 class="text-uppercase">Студенти</h4>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </a><!--/category-box-->
            </div><!--/item-->
            <div class="item">
                <a class="category-box" href="#">
                    <img src="images/products/p1.jpg" alt="" class="img-responsive">
                    <div class="category-text">
                        <h4 class="text-uppercase">Аспіранти</h4>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </a><!--/category-box-->
            </div><!--/item-->
            <div class="item">
                <a class="category-box" href="#">
                    <img src="images/products/p6.jpg" alt="" class="img-responsive">
                    <div class="category-text">
                        <h4 class="text-uppercase">Викладачі</h4>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </a><!--/category-box-->
            </div><!--/item-->
        </div>
    </div>
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
@endsection