@extends('layouts.app')

@section('content')

    <!--page header-->
    <div class="page-breadcrumb grey-bg margin-b-60">
        <div class="container">
            <h4 class="margin-b-20">Організації які співпрацюють з нами</h4>
        </div>
    </div>
    <div class="container margin-b-30">
        <div class="row">
            @foreach($organizations as $index=>$organization)
                @if((($index)%3) ==0)
                    </div>
                    <div class="row">
                @endif
                <div class="col-sm-4 margin-b-30">
                    <div class="faq-box">
                        <h4><a rel="nofollow noopener" target="_blank" href="{{$organization->url}}">{{$organization->title}}</a></h4>
                        <p>{{$organization->text}}</p>
                    </div><!--end faq box-->
                </div>
            @endforeach
        </div>
    </div>
    <!--page end-->
@endsection