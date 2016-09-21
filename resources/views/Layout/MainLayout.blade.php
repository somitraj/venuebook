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
    <link href="css/custom.css" rel="stylesheet">



    @yield('head')

</head>

<body>
<div class="container">
    <div class="row">

        <div class="col-md-11">
            <img src="images/banner1.jpg" >
        </div>
    </div>
     <div class="navbar navbar-default">
                      <div class="navbar-header">

              </div>


    <ul class="nav navbar-nav">
        <li class="active" ><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
        <li><a href="#" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
        <li><a href="#" class="glyphicon glyphicon-tags"> Feedback</a></li>
        <li><a href="#" class="glyphicon glyphicon-pencil"> Register</a></li>
        <li><a href="/login" class="glyphicon glyphicon-hand-right"> Login</a></li>
    </ul>
         </div>
         @yield('content')

         <div class="footer">
             <p>Copyright © venuebook.com | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>

         </div>
</div>









</body>
</html>