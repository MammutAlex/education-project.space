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
                <h3>Information</h3>
            </div>
            <div class="col-sm-7">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
                <p>124, Munna Wali Dhani, Lalchandpura, Niwaru Road, Jhotwara, Jaipur, Rajsthan, 302012</p>
                <p>Telephone: 1800.123.4534<br>Fax: 1800.123.4534</p>
            </div>
        </div>
        <div class="row margin-b-30">
            <div class="col-sm-5">
                <h3>Contact form</h3>
            </div>
            <div class="col-sm-7">
                <form method="post" action="#" class="boland-contact">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12 margin-b-20">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name...." />
                                </div>
                                <div class="col-sm-12 margin-b-20">
                                    <input type="text" name="email" class="form-control" placeholder="Email Address...." />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 margin-b-20">
                            <textarea name="message" class="form-control" rows="5" placeholder="Message...."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="data-status"></div> <!-- data submit status -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <button type="submit" name="submit" class="btn btn-lg btn-dark">send message</button>
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
                    zoom: 13,
                    markers: [
                        {
                            address: 'New York, 45 Park Avenue', // Your Adress Here
                            html: '<strong>Our Office</strong><br>45 Park Avenue, Apt. 303 </br>New York, NY 302012 ',
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