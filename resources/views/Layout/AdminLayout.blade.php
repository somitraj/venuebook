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
       {{--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>--}}
{{--
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
--}}




    @yield('head')

</head>

<body>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <img class="img-responsive" src="images/banner2.jpg" >
        </div>
    </div>

@yield('menu')


    <div class="between">


         @yield('content')
    </div>
    <footer>
        <div class="row" style="background-color: white">
            <div class="col-md-4">
                <img src="images/logo.png" style="width: 80px;height: 80px">
            </div>
            <div class="col-md-8">
                <br><br>
                <p style="color: black;">Copyright © venuebooking.com | <a href="/Privacy">Privacy Policy</a> | <a href="/Terms">Terms of Use</a></p>
            </div>
        </div>
    </footer>
</div>







<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>