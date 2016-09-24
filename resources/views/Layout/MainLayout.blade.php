<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> {{-- imp to make responsive--}}
    <title>{{ trans('front/site.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> {{--imp to make responsive--}}

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">
    <link href="css/ninja-slider.css" rel="stylesheet" />
    <script src="js/ninja-slider.js"></script>
    <link href="css/thumbnail-slider.css" rel="stylesheet" type="text/css" />

    <script src="js/thumbnail-slider.js" type="text/javascript"></script>
    <link href="css/font-awesome.min.css" rel="stylesheet"> {{--for icons style--}}
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    @yield('script')

    {{--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>--}}
{{--
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
--}}


    @yield('head')

</head>

<body>
<div class="container" style="width:1170px;">

{{--<header class="site-header" role="banner">
    <div class="wrapper">

                <div class="row">
                    <div class="col-md-3">
                        <img src="/images/logo2.png" style="height: 130px;width: 130px">
                    </div>
                    <div class="col-md-6">
                        <p style="color: white;font-size: 60px;text-align: center">VENUEBOOKING</p>
                    </div>
                </div>
     </div>
</header>--}}
    <div class="row">

        <div class="col-md-12">
        <a href="/"> <img class="img-responsive" src="images/banner new.jpg" style="width:/*auto*/ 1170px"></a>
        </div>
    </div>

@yield('menu')

{{--
<div class="container" style="width:1170px/*auto*/;">
--}}
    <div class="between">

         @yield('content')
    </div>

{{--</div>--}}
         <footer>
             <div class="row">
                 <div class="col-md-4">
                     <img src="images/logo1.png" style="width: 80px;height: 80px">
                     </div>
                 <div class="col-md-8">
                     <br><br>
             <p style="color: black;">Copyright © venuebooking.com | <a href="/Privacy">Privacy Policy</a> | <a href="/Terms">Terms of Use</a></p>
                     </div>
            </div>
         </footer>

</div>









</body>
</html>