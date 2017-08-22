@extends('layouts.app')

@section('content')
    <div class="space-60"></div>
    <!--page header-->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="post">
                    <img src="images/img-lg-1.jpg" alt="" class="img-responsive">
                    <div class="blog-desc">
                        <div class="post-meta margin-b-10">
                            <span>12 November 2016</span>
                        </div>
                        <h2>New Angular Notebook</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                        <p class="lead">
                            " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua "
                        </p>
                        <ul class="list-inline social-icons text-center margin-b-20">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div><!--end post-->
            </div>
            <div class="col-sm-3">
                <div class="sidebar-widget margin-b-40">
                    <h4>Останні новини</h4>
                    <ul class="list-unstyled recent-post">
                        <li class="clearfix">
                            <a href="#">
                                <img src="images/img-2.jpg" alt="" width="70">
                            </a>
                            <div class="post-content">
                                <h5><a href="#">Lorem ipsum dolor sit amet ipsum dolor</a></h5>
                                <span>14 April 2016</span>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                <img src="images/img-1.jpg" alt="" width="70">
                            </a>
                            <div class="post-content">
                                <h5><a href="#">Cordoin lorem ipsum dolor sit amet</a></h5>
                                <span>14 April 2016</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end page header-->
    <div class="space-60"></div>
@endsection