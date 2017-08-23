@extends('layouts.app')

@section('content')
    <!--page header-->
    <div class="page-breadcrumb grey-bg margin-b-60">
        <div class="container">
            <h4 class="margin-b-20">Наша команда</h4>
        </div>
    </div>
    <div class="container margin-b-30">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center margin-b-30">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis
                    varius. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in
                    venenatis. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in
                    venenatis.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($persons as $person)
                <div class="col-md-3 col-sm-6 margin-b-30">
                    <div class="person-box">
                        <img src="/{{$person->photo}}" alt="{{$person->name}}" class="img-responsive margin-b-20">
                        <h4>{{$person->name}} <br>
                            <small>{{$person->position}}</small>
                        </h4>
                        <ul class="list-inline social-icons">
                            @if($person->facebook)
                                <li>
                                    <a rel="nofollow noopener" target="_blank"
                                       href="https://www.facebook.com/{{$person->facebook}}">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                            @endif
                            @if($person->twitter)
                                <li>
                                    <a rel="nofollow noopener" target="_blank"
                                       href="https://twitter.com/{{$person->facebook}}">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            @endif
                            @if($person->linkedin)
                                <li>
                                    <a rel="nofollow noopener" target="_blank"
                                       href="https://www.linkedin.com/in/{{$person->linkedin}}">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            @endif
                            @if($person->instagram)
                                <li>
                                    <a rel="nofollow noopener" target="_blank"
                                       href="https://www.instagram.com/{{$person->instagram}}">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                        <p class="text-small">
                            {{$person->description}}
                        </p>
                    </div><!--/person-box-->
                </div>
            @endforeach
        </div>
    </div>
@endsection