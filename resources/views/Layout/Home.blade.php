<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> {{-- imp to make responsive--}}
    <title>{{ trans('front/site.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> {{--imp to make responsive--}}

    <link href="css/bootstrap.min.css" rel="stylesheet">
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


    <div class="row">
        <div class="form-group col-lg-4">
        </div>

        <div class="form-group col-lg-5">
            <div class="input-group">
                <input type="text" class="form-control" id="usr" value="Search Your Venue By Capacity / Location">

                <span class="input-group-btn" ><button type="button" class="btn btn-primary">Search</button></span>

            </div>
            <h6><a href="#"> advanced search>></a></h6>





    </div>


</div>
<h2>Trending :</h2>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/images/venue1.jpg" height="300" width="300">
            </div>

            <div class="item">
                <img src="/images/venue2.jpg" height="300" width="300">
            </div>

            <div class="item">
                <img src="/images/venue3.jpg" height="300" width="300">
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        </div>

    </div>
</div>

</body>
</html>