<?php
$proimage=\Venue\GetImage::getImage();
foreach($proimage as $pro){
    if($pro->user_id== Auth::user()->id){
        $pro1=$pro->profile_image;
    }
}
?>

@extends('Layout/MainLayout')
@section('info')

    <div style="float: right">

        @if(Auth::check())  {{--login check garne--}}
        <div>
            <p  style="font-family:'Times New Roman';color:gray;border-top-width: 50px;margin-top: 5px;">
                <img src="/{{$pro1}}"class="img-circle" width="40" height="40">  Hello   {{Auth::user()->username}} ,</p>

        </div>

        @endif
    </div>
@endsection


@section('content')
<br><br>


    <div class="row" style="border: 1px solid;    padding-top: 20px;  background-color: #F8F6F2;margin-left: 80px;margin-right: 80px;">
        <div class="form-group col-lg-4">
        </div>

        {!! Form::open(['method'=>'GET','url'=>'user/venuesearch','class'=>'navbar-form navbar-left','role'=>'search'/*,'action'=>'/Search'*/])  !!}

        <div class="input-group custom-search-form ">
            <input type="text" class="form-control" name="search" placeholder="Search your Venue Here">
    <span class="input-group-btn">
        <button class="btn btn-primary" type="submit"> Search
        </button>
    </span>
        </div>
        {!! Form::close() !!}
        {{--  <h5><a href="#"> advanced search>></a></h5>--}}


    </div>










    <!--start-->
    <div style="width:1000px;margin:20px auto;">
        <h2><b>Trending :</b></h2>
        <div id="ninja-slider" style="float:left;">
            <div class="slider-inner">
                <ul>
                    @foreach($sliders as $slider)
                        <li><a href="venuepage?id={{$slider->venue_id}}"><img class="ns-img" src="/{{$slider->cover}}"></a></li>
                   {{-- <li><a href="/Lainchaur"><img class="ns-img" src="images/venue1.jpg"></a></li>
                    <li><a href="/Sasa"><img class="ns-img" src="images/venue2.jpg"></a></li>
                    <li><a href="/Shanker"><img class="ns-img" src="images/venue3.jpg"></a></li>
                    <li><a href="/Star"><img class="ns-img" src="images/venue4.jpg"></a></li>
                    <li><a href="/Athiti"><img class="ns-img" src="images/venue5.jpg"></a></li>
                    <li><a href="/Hyatt"><img class="ns-img" src="images/venue6.jpg"></a></li>
                    <li><a href="/Thapagaun"><img class="ns-img" src="images/venue7.jpg"></a></li>
                    <li><a href="/Durbar"><img class="ns-img" src="images/venue8.jpg"></a></li>
                    <li><a href="/Radisson"><img class="ns-img" src="images/venue9.jpg"></a></li>
                    <li><a href="/Lainchaur"><img class="ns-img" src="images/venue1.jpg"></a></li>
                    <li><a href="/Sasa"><img class="ns-img" src="images/venue2.jpg"></a></li>
                    <li><a href="/Shanker"><img class="ns-img" src="images/venue3.jpg"></a></li>--}}
                    @endforeach
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
        <div id="thumbnail-slider" style="float:left;">
            <div class="inner">
                <ul>
                    @foreach($sliders as $slider)
                        <li><a href="venuepage?id={{$slider->venue_id}}"><img class="thumb" src="/{{$slider->cover}}"></a>
                        </li>
                    {{--<li>
                        <a href="/Lainchaur"><img class="thumb" src="images/venue1.jpg" ></a>
                    </li>
                    <li>
                        <a href="/Sasa"><img class="thumb" src="images/venue2.jpg"></a>
                    </li>
                    <li>
                        <a href="/Shanker"><img class="thumb" src="images/venue3.jpg"></a>
                    </li>
                    <li>
                        <a href="/Star"><img class="thumb" src="images/venue4.jpg"></a>
                    </li>
                    <li>
                        <a href="/Athiti"><img class="thumb" src="images/venue5.jpg"></a>
                    </li>
                    <li>
                        <a href="/Hyatt"><img class="thumb" src="images/venue6.jpg"></a>
                    </li>
                    <li>
                        <a href="/Thapagaun"><img class="thumb" src="images/venue7.jpg"></a>
                    </li>
                    <li>
                        <a href="/Durbar"><img class="thumb" src="images/venue8.jpg"></a>
                    </li>
                    <li>
                        <a href="/Radisson"><img class="thumb" src="images/venue9.jpg"></a>
                    </li>
                    <li>
                        <a href="/Lainchaur"><img class="thumb" src="images/venue1.jpg"></a>
                    </li>
                    <li>
                        <a href="/Sasa"><img class="thumb" src="images/venue2.jpg"></a>
                    </li>
                    <li>
                        <a href="/Shanker"><img class="thumb" src="images/venue3.jpg"></a>
                    </li>--}}
                        @endforeach
                </ul>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
@endsection