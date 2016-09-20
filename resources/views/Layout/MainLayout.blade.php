<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> {{-- imp to make responsive--}}
        <title>{{ trans('front/site.title') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> {{--imp to make responsive--}}

        <link href="css/bootstrap.min.css" rel="stylesheet">



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
            <div>
          {{--  <nav class="navbar navbar-default">
                            <div class="navbar-header">

                  {{--  </div>--}}

                </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>

                </div>

            {{--</nav>--}}
        <br>
        </div>
        <div>
            <div class="row">
                <div class="form-group col-lg-4">
                    </div>

                <div class="form-group col-lg-5">
            <div class="form-group">
                <input type="text" class="form-control" id="usr" value="Search Your Venue By Capacity / Location">
                <h6><a href="#"> advanced search>></a></h6>
                </div>
                    </div>
                <button type="button" class="btn btn-primary">Search</button>


        </div>
        @yield('content')
    </div>
    <h2>Trending :</h2>


    </body>
</html>