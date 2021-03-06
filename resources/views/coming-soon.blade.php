<!DOCTYPE html>
<html lang="uk" class="maintenance-page">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.png" type="image/png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Educational space project</title>
    <!-- Common plugins -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/plugins/owl-carousel/assets/owl.theme.default.css" rel="stylesheet">

    <link href="plugins/icheck/skins/minimal/blue.css" rel="stylesheet">
    <link href="/plugins/time-to/timeTo.css" rel="stylesheet">
    <!--template css-->
    <link href="/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="maintenance-page-wrap">
<!--pre-loader-->
<div id="preloader"></div>
<!--pre-loader-->

<!--page header-->

<div class="display-table">
    <div class="vertical-middle">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <p class="lead">
                        <b>Освітній проект в галузі космічних досліджень</b>
                    </p>
                    <p class="lead">
                        Скоро запуск
                    </p>
                    <div id="countdown"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end page header-->


<!--Common plugins-->
<script src="/plugins/jquery/dist/jquery.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/pace/pace.min.js"></script>
<script src="/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="/plugins/sticky/jquery.sticky.js"></script>
<script src="/plugins/icheck/icheck.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/boland.custom.js"></script>
<script src="/plugins/time-to/jquery.time-to.min.js"></script>
<script>
    $(document).ready(function () {
        $('#countdown').timeTo({
            timeTo: new Date(new Date('Thursday September 7 2017 16:00:00')),
            displayDays: 2,
            theme: "white",
            displayCaptions: true,
            fontSize: 48,
            lang: 'ua',
            captionSize: 14
        });
    });
</script>
</body>
</html>