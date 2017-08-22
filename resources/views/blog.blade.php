@extends('layouts.app')

@section('content')
    <!--page header-->
    <div class="page-breadcrumb margin-b-60">
        <div class="container">
            <h4>Блог</h4>
        </div>
    </div>
    <!--end page header-->
    <!--page start-->

    <div class="container margin-b-30">
        <div class="row masonry-grid">
            <div class="col-sm-4 masonry-item margin-b-30">
                <div class="post">
                    <a href="{{route('article',['article'=>'test'])}}">
                        <img src="images/img-4.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="blog-desc">
                        <div class="post-meta">
                            <span>12 November 2016</span>
                        </div>
                        <h4><a href="{{route('article',['article'=>'test'])}}">New Angular Notebook</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat...[]
                        </p>
                        <div class="text-right">
                            <a href="{{route('article',['article'=>'test'])}}">More <i
                                        class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 masonry-item margin-b-30">
                <div class="post">
                    <a href="{{route('article',['article'=>'test'])}}">
                        <img src="images/img-1.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="blog-desc">
                        <div class="post-meta">
                            <span>12 November 2016</span>
                        </div>
                        <h4><a href="{{route('article',['article'=>'test'])}}">New womens collection</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat...[]
                        </p>
                        <div class="text-right">
                            <a href="{{route('article',['article'=>'test'])}}">More <i
                                        class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 masonry-item margin-b-30">
                <div class="post">
                    <a href="{{route('article',['article'=>'test'])}}">
                        <img src="images/img-5.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="blog-desc">
                        <div class="post-meta">
                            <span>12 November 2016</span>
                        </div>
                        <h4><a href="{{route('article',['article'=>'test'])}}">New womens collection</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat...[]
                        </p>
                        <div class="text-right">
                            <a href="{{route('article',['article'=>'test'])}}">More <i
                                        class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 masonry-item margin-b-30">
                <div class="post">
                    <a href="{{route('article',['article'=>'test'])}}">
                        <img src="images/img-2.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="blog-desc">
                        <div class="post-meta">
                            <span>12 November 2016</span>
                        </div>
                        <h4><a href="{{route('article',['article'=>'test'])}}">New womens collection</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat...[]
                        </p>
                        <div class="text-right">
                            <a href="{{route('article',['article'=>'test'])}}">More <i
                                        class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 masonry-item margin-b-30">
                <div class="post">
                    <a href="{{route('article',['article'=>'test'])}}">
                        <img src="images/img-5.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="blog-desc">
                        <div class="post-meta">
                            <span>12 November 2016</span>
                        </div>
                        <h4><a href="{{route('article',['article'=>'test'])}}">New womens collection</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat...[]
                        </p>
                        <div class="text-right">
                            <a href="{{route('article',['article'=>'test'])}}">More <i
                                        class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 masonry-item margin-b-30">
                <div class="post">
                    <a href="{{route('article',['article'=>'test'])}}">
                        <img src="images/img-2.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="blog-desc">
                        <div class="post-meta">
                            <span>12 November 2016</span>
                        </div>
                        <h4><a href="{{route('article',['article'=>'test'])}}">New womens collection</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat...[]
                        </p>
                        <div class="text-right">
                            <a href="{{route('article',['article'=>'test'])}}">More <i
                                        class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 masonry-item margin-b-30">
                <div class="post">
                    <a href="{{route('article',['article'=>'test'])}}">
                        <img src="images/img-3.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="blog-desc">
                        <div class="post-meta">
                            <span>12 November 2016</span>
                        </div>
                        <h4><a href="#">New womens collection</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat...[]
                        </p>
                        <div class="text-right">
                            <a href="{{route('article',['article'=>'test'])}}">More <i
                                        class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 masonry-item margin-b-30">
                <div class="post">
                    <a href="{{route('article',['article'=>'test'])}}">
                        <img src="images/img-6.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="blog-desc">
                        <div class="post-meta">
                            <span>12 November 2016</span>
                        </div>
                        <h4><a href="{{route('article',['article'=>'test'])}}">New womens collection</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat...[]
                        </p>
                        <div class="text-right">
                            <a href="{{route('article',['article'=>'test'])}}">More <i
                                        class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 masonry-item margin-b-30">
                <div class="post">
                    <a href="{{route('article',['article'=>'test'])}}">
                        <img src="images/img-1.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="blog-desc">
                        <div class="post-meta">
                            <span>12 November 2016</span>
                        </div>
                        <h4><a href="{{route('article',['article'=>'test'])}}">New womens collection</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat...[]
                        </p>
                        <div class="text-right">
                            <a href="{{route('article',['article'=>'test'])}}">More <i
                                        class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--masonry row end-->
        <nav aria-label="Page navigation" class="text-right">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!--end page-->
@endsection

@section('script')
    <script src="/plugins/masonry/masonry.pkgd.min.js"></script>
    <script src="/plugins/masonry/imagesloaded.pkgd.min.js"></script>
    <script>
        var $container = $('.masonry-grid');
        $container.imagesLoaded(function () {
            $container.masonry({
                itemSelector: '.masonry-item'
            });
        });
    </script>
@endsection