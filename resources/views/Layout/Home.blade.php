<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
?>
@extends('Layout/MainLayout')  {{--mainlayout blade use gareko
--}}
@section('content')  {{--mainlayout blade vita content yield ma rakhna--}}
<br><br>

    <div class="row" style="border: 1px solid;    padding-top: 20px;  background-color: #F8F6F2;margin-left: 80px;margin-right: 80px;">
        <div class="form-group col-lg-4">
        </div>

        {!! Form::open(['method'=>'GET','url'=>'venuesearch','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

        <div class="input-group custom-search-form ">
            <input type="text" class="form-control" name="search" placeholder="Search your Venue Here">
    <span class="input-group-btn">
        <button class="btn btn-primary" type="submit"> Search
               </button>
    </span>
        </div>
        {!! Form::close() !!}


       {{-- <form action="/Search" method="get">
        <div class="form-group col-lg-4">
            <div class="input-group">
                <input type="text" class="form-control" id="usr" placeholder="Search Your Venue Here">

                <span class="input-group-btn" ><input type="submit" class="btn btn-primary" value="Search"></span>
            </div>


         </div>
        <div class="form-group col-lg-2">
            <select class="form-control" id="district">
                <option>kathmandu</option>
                <option>lalitpur</option>
                <option>bhaktaput</option>
                <option>nuwakot</option>
            </select>
        </div>

        </form>--}}

    </div>


</div>







    <!--start-->
    <div style="width:1000px;margin:20px auto;">
        <h2><b>Trending :</b></h2>
        <div id="ninja-slider" style="float:left;">
            <div class="slider-inner">
                <ul>

                    @foreach($sliders as $slider)
                    <li><a href="/venuepage?id={{$slider->venue_id}}"><img class="ns-img" src="{{$slider->cover}}"></a></li>
                    @endforeach
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
        <div id="thumbnail-slider" style="float:left;">
            <div class="inner">
                <ul>
                    @foreach($sliders as $slider)
                    <li>{{--<a href="/venuepage?id={{$slider->venue_id}}">--}}<img class="thumb" src="{{$slider->cover}}">{{--</a>--}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
       <div style="clear:both;"></div>
   </div>





@endsection