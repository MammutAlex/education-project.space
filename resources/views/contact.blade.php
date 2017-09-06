@extends('layouts.app')

@section('content')

    <div class="page-breadcrumb">
        <div class="container">
            <h4>Ми хотіли б почути від вас</h4>
        </div>
    </div>
    <div class="space-80"></div>
    <div class="container margin-b-30">
        <div class="row margin-b-30">
            <div class="col-sm-5">
                <h3>Інформація</h3>
            </div>
            <div class="col-sm-7">
                <p>
                    Якщо Вам стала в нагоді інформація на сайті і Ви маєте, що нам сказати?
                </p>
                <p>
                    Якщо Ви є представником організації, яка займається популяризацією космічних досліджень, або науковою діяльністю в галузі космічних досліджень, а ми про вас досі нічого не знаємо?
                </p>
                <p>
                    Зв'яжіться з нами і ми з радістю додамо вас до каталогу команди і будемо публікувати новини Вашої діяльності в напрямку освіти та популяризації космічних досліджень
                </p>
                <p>
                    Телефон: <a href="tel:+380634518270">+380 63 451 82 70</a><br>
                    Email: <a href="mailto:support@education-project.space">support@education-project.space</a>
                </p>
            </div>
        </div>
        <div class="row margin-b-30">
            <div class="col-sm-5">
                <h3>Контактна форма</h3>
            </div>
            <div class="col-sm-7">
                @if (session('contacted'))
                    <p class="text-primary">Ваше повідомлення успішно надіслане</p>
                @endif
                <form method="POST" action="{{ route('contact') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12 margin-b-20{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" name="name" class="form-control" placeholder="Імʼя...."/>
                                </div>
                                <div class="col-sm-12 margin-b-20{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="email" name="email" class="form-control" placeholder="Email...."
                                           required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 margin-b-20{{ $errors->has('text') ? ' has-error' : '' }}">
                            <textarea name="text" class="form-control" rows="5" placeholder="Повідомлення...."
                                      required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <button type="submit" class="btn btn-lg btn-dark">Надіслати повідомлення
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="google-map-container margin-b-60">
        <div id="googlemaps" style="width: 100%;height: 400px;"></div>
    </div>
@endsection
@section('script')
    <!-- page scripts -->
    <script src="js/contact.js" type="text/javascript"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBENlIxSKmTEK2fJeKjKo_JMxC9jE2IkL4"></script>
    <script src="/js/jquery.gmaps.min.js"></script>
    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {

                $('#googlemaps').gMap({
                    maptype: 'ROADMAP',
                    scrollwheel: false,
                    zoom: 11,
                    markers: [
                        {
                            address: 'проспект Академіка Глушкова 40, корпус 4/1, Україна, Київ', // Your Adress Here
                            html: '<strong>Наш Офіс</strong><br>проспект Академіка Глушкова 40, корпус 4/1, каб. 413</br> Україна, Київ ',
                            popup: false,
                            icon: {
                                image: "images/marker.png",
                                iconsize: [28, 40],
                                iconanchor: [20, 40]
                            }
                        }
                    ]
                });
            });
        })(this.jQuery);
    </script>
@endsection