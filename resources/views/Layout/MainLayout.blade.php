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
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



    @yield('head')

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-1">
            <img src="images/logo.png" height="120" width="120">

        </div>
        <div class="col-md-11">
            <img src="images/banner.jpg" >
        </div>
    </div>
     <div class="navbar navbar-default">
                      <div class="navbar-header">

              </div>
    {{--
                    </div>--}}

    <ul class="nav navbar-nav">
        <li class="active" ><a href="#" class="glyphicon glyphicon-home"> Home</a></li>
        <li><a href="#" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
        <li><a href="#" class="glyphicon glyphicon-tags"> Feedback</a></li>
        <li><a href="#" class="glyphicon glyphicon-pencil"> Register</a></li>
        <li><a href="#" class="glyphicon glyphicon-hand-right"> Login</a></li>
    </ul>
</div>


    @yield('content')

{{--</nav>--}}





</body>
</html>