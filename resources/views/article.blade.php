@extends('layouts.app')

@section('content')
    <div class="space-60"></div>
    <!--page header-->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="post">
                    <img src="/{{$article->image}}" alt="" class="img-responsive">
                    <div class="blog-desc">
                        <div class="post-meta margin-b-10">
                            <span>{{$article->date}}</span>
                        </div>
                        <h2>{{$article->title}}</h2>
                        <p>
                            {!! $article->description !!}
                        </p>
                        <p>
                            {!! $article->text !!}
                        </p>
                    </div>
                </div><!--end post-->
            </div>
            <div class="col-sm-3">
                <div class="sidebar-widget margin-b-40">
                    <h4>Останні новини</h4>
                    <ul class="list-unstyled recent-post">
                        @foreach($moreArticles as $art)
                            <li class="clearfix">
                                <a href="{{route('article',['article'=>$art->id])}}">
                                    <img src="/{{$art->image}}" alt="" width="70">
                                </a>
                                <div class="post-content">
                                    <h5>
                                        <a href="{{route('article',['article'=>$art->id])}}">{{$art->title}}</a>
                                    </h5>
                                    <span>{{$art->date}}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end page header-->
    <div class="space-60"></div>
@endsection