@extends('layouts.app')

@section('content')
    <div class="parallax-banner margin-b-60" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h1>Коротко про нас</h1>
                    <p class="lead">
                        Команда небайдужих спеціалістів має на меті централізувати в одному порталі всі організації, що
                        займаються освітньою та популяризаційною діяльністю в галузі космічних досліджень в Україні.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row masonry-grid">
            @foreach($directions as $index=>$direction)
                <div class="col-sm-4  masonry-item margin-b-30">
                    <a class="image-box" href="{{route('direction',['direction'=>$direction->url])}}">
                        <img src="/{{$direction->photo}}" alt="{{$direction->title}}" class="img-responsive">
                        <div class="img-overlay">
                            <h1>{{$direction->title}}</h1>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="space-80"></div>
    <div class="testimonials">
        <div class="testi-slider owl-carousel owl-theme">
            @foreach($reviews as $review)
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <p>
                                    "{{$review->text}}"
                                </p>
                                <h4>{{$review->name}}
                                    <small>{{$review->position}}</small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div><!--/testimonials-->
    <div class="space-80"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 margin-b-30">
                <h3 class="text-capitalize margin-b-40"> Останні новини</h3>
                <ul class="quick-news-list list-unstyled">
                    @foreach($calendars as $calendar)
                        <li class="clearfix">
                            <div class="date">
                                <span>{{date('d',strtotime($calendar->date))}}</span>
                                {{date('m/Y',strtotime($calendar->date))}}
                            </div>
                            <div class="content">
                                <a rel="nofollow noopener" target="_blank" href="{{$calendar->url}}">
                                    <h4>
                                        {{$calendar->title}}
                                    </h4>
                                </a>
                                <ul class="list-inline quick-meta">
                                    <li>
                                        {{$calendar->description}}
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6 margin-b-30">
                <h3 class="text-capitalize margin-b-40"> Підпишіться на новини</h3>

                @if(!session('subscribed'))
                    <form class="form-newsletter-lg{{ $errors->has('email') ? ' has-error' : '' }}" method="POST"
                          action="{{ route('subscribed') }}">
                        <p class="margin-b-20">
                            Текст запрошення підписатись і пояснення що отримають (найбільш актуальні новини і т.д.)
                        </p>
                        {{ csrf_field() }}
                        <input type="email" name="email" class="form-control margin-b-20" placeholder="Введіть email"
                               required="">
                        <input type="submit" class="btn btn-link" value="Підписатись">
                    </form>
                @else
                    <p class="margin-b-20">
                        Текст привітання з підпискою
                    </p>
                @endif
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