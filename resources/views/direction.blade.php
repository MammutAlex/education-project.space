@extends('layouts.app')

@section('content')
    <!--page header-->
    <div class="page-breadcrumb margin-b-60">
        <div class="container">
            <h4>Школярі</h4>
        </div>
    </div>
    <!--page header-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    @foreach($links as $index=>$link)
                        @if((($index)%4) ==0)
                            </div>
                            <div class="row">
                        @endif
                        <div class="col-sm-6 col-md-3">
                            <div class="product-box">
                                <div class="product-thumb">
                                    <img src="/{{$link->photo}}" alt="{{$link->title}}" class="img-responsive">
                                    <div class="product-overlay">
                                        <span>
                                            <a rel="nofollow noopener" target="_blank" href="{{$link->url}}"
                                               class="btn btn-default">Детальніше</a>
                                        </span>
                                    </div>
                                </div><!--/product-thumb-->
                                <div class="product-desc">
                                    <h5 class="product-name">
                                        <a rel="nofollow noopener" target="_blank"
                                           href="{{$link->url}}">{{$link->title}}</a>
                                    </h5>
                                </div><!--/product-desc-->
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="space-30"></div>
                <nav aria-label="Page navigation" class="text-right margin-b-30">
                    {{ $links->links() }}
                </nav>
            </div>
        </div>
    </div>
@endsection