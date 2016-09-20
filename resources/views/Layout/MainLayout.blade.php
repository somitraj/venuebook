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
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
            </div>
        </div>
        @yield('content')
    </div>



    </body>
</html>