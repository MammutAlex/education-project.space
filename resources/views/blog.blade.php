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
            @foreach($articles as $article)
                <div class="col-sm-4 masonry-item margin-b-30">
                    <div class="post">
                        <a href="{{route('article',['article'=>$article->id])}}">
                            <img src="/{{$article->image}}" alt="" class="img-responsive">
                        </a>
                        <div class="blog-desc">
                            <div class="post-meta">
                                <span>{{$article->date}}</span>
                            </div>
                            <h4><a href="{{route('article',['article'=>$article->id])}}">{{$article->title}}</a></h4>
                            <p>
                                {{$article->description}}
                            </p>
                            <div class="text-right">
                                <a href="{{route('article',['article'=>$article->id])}}">
                                    Детальніше <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!--masonry row end-->
        <nav aria-label="Page navigation" class="text-right">
            {{ $articles->links() }}
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