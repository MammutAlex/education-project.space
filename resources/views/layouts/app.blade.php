<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/favicon.png" type="image/png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Common plugins -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/plugins/owl-carousel/assets/owl.theme.default.css" rel="stylesheet">

    <link href="plugins/icheck/skins/minimal/blue.css" rel="stylesheet">
    <link href="/plugins/time-to/timeTo.css" rel="stylesheet">
    <!--template css-->
    <link href="/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--pre-loader-->
<div id="preloader"></div>
<!--pre-loader-->
<!--back to top-->
<a href="#" class="scrollToTop"><i class="material-icons 48dp">keyboard_arrow_up</i></a>
<!--back to top end-->
<!--===========================start Header===========================-->
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top yamm sticky-header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}"><img src="/favicon.png" alt="" width="40px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{isActiveRoute('index')}}">
                    <a href="{{route('index')}}">Головна</a>
                </li>

                <li class="dropdown {{isActiveRoute('direction')}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Напрямки <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('direction',['direction'=>'test'])}}">Діти</a></li>
                    </ul>
                </li>
                <li class="{{isActiveRoute('blog')}}"><a href="{{route('blog')}}">Блог</a></li>
                <li class="{{isActiveRoute('contact')}}"><a href="{{route('contact')}}">Контакт</a></li>
                <li class="{{isActiveRoute('organizations')}}"><a href="{{route('organizations')}}">Організації</a></li>
                <li class="{{isActiveRoute('about')}}"><a href="{{route('about')}}">Про нас</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

<!--===========================End Header===========================-->
@yield('content')
<!--footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 margin-b-30">
                <h4>Про нас</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.
                </p>
                <ul class="list-inline socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div><!--/col-->
            <div class="col-md-3 margin-b-30">
                <h4>Останні новини</h4>
                <ul class="list-unstyled latest-news">
                    <li class="clearfix">
                        <div class="pull-left">
                            <a href="#">
                                <img src="images/img-1.jpg" alt="" width="50" class="img-responsive">
                            </a>
                        </div>
                        <div class="content">
                            <h5><a href="#">Lorem ipsum dolor</a></h5>
                            <span>Lorem ipsum dolor ...</span>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="pull-left">
                            <a href="#">
                                <img src="images/img-2.jpg" alt="" width="50" class="img-responsive">
                            </a>
                        </div>
                        <div class="content">
                            <h5><a href="#">this is a post title</a></h5>
                            <span>Lorem ipsum dolor ...</span>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="pull-left">
                            <a href="#">
                                <img src="images/img-3.jpg" alt="" width="50" class="img-responsive">
                            </a>
                        </div>
                        <div class="content">
                            <h5><a href="#">Post title goes here</a></h5>
                            <span>Lorem ipsum dolor ...</span>
                        </div>
                    </li>
                </ul>
            </div><!--/col-->
            <div class="col-md-3 margin-b-30">
                <h4>Сторінки</h4>
                <ul class="list-unstyled link-list">
                    <li><a href="{{route('blog')}}">Блог</a></li>
                    <li><a href="{{route('contact')}}">Контакт</a></li>
                    <li><a href="{{route('organizations')}}">Організації</a></li>
                    <li><a href="{{route('about')}}">Про нас</a></li>
                </ul>
            </div><!--/col-->
            <div class="col-md-3 margin-b-30">
                <h4>Контактні дані</h4>
                <div class="newsletter-form margin-b-20">
                    <form>
                        <input type="text" class="form-control margin-b-10" placeholder="Email ">
                        <button class="newsletter-button" type="button"><i class="fa fa-angle-right"> </i></button>
                    </form>
                </div>
                <p class="lead">
                    <br>1800 443-5493
                </p>
                <p class="lead">support@boland.com</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container text-center">
        <span>&copy; Copyright 2017. All Right Reserved.</span>
    </div>
</footer>
<!--/footer-->
<!--Common plugins-->
<script src="/plugins/jquery/dist/jquery.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/pace/pace.min.js"></script>
<script src="/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="/plugins/sticky/jquery.sticky.js"></script>
<script src="/plugins/icheck/icheck.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/boland.custom.js"></script>
<!--page template scripts-->
@yield('script')
</body>
</html>
