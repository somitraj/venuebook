<?php

/*$vdata=\Venue\venuedata1::getVenueData();*/
/*foreach($vdata as $venuedata){
    if($venuedata->venue_id==){

    }*/

?>

@extends('Layout/MainLayout')

@section('content')
    @foreach($vdata as $vd1)
        <img style=width:120px;height:80px;margin-left:80px;" src="/{{$vd1->image}}"/>
        <h4 style="text-align:left;margin-left:80px;">{{$vd1->name}}</h4>

        <br>
    @endforeach




    <div class="row">
        <div class="col-md-8">

            <div style="width:1000px;margin:10px auto;">

                <div id="ninja-slider">
                    <div class="slider-inner">
                        <ul>
                            {{--{{dd($vdata)}}--}}
                            @foreach($vdata as $vd)
                                <li><img class="ns-img" src="/{{$vd->cover}}">
                                </li>
                                <li><img class="ns-img" src="/{{$vd->image1}}">
                                </li>
                                <li><img class="ns-img" src="/{{$vd->image2}}">
                                </li>
                                <li><img class="ns-img" src="/{{$vd->image3}}">
                                </li>
                                <li><img class="ns-img" src="/{{$vd->image4}}">
                                </li>
                                {{--<li><a class="ns-img" href="images/Lainchaur banquet1.jpg"></a></li>
                                <li><a class="ns-img" href="images/Lainchaur banquet2.jpg"></a></li>
                                <li><a class="ns-img" href="images/Lainchaur banquet3.jpg"></a></li>
                                <li><a class="ns-img" href="images/Lainchaur banquet4.jpg"></a></li>
                                <li><a class="ns-img" href="images/Lainchaur banquet5.jpg"></a></li>
                                <li><a class="ns-img" href="images/Lainchaur banquet6.jpg"></a></li>--}}
                            @endforeach
                        </ul>
                        <div class="fs-icon" title="Expand/Close"></div>
                    </div>


                    <div style="clear:both;"></div>
                    <h5 style="color: white"> It is one the best places in the capital where the finest banquet facilities are offered together with unparalleled service and quality food</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            Location :
            <div id="map"></div>
            <!-- Map -->
            <div id="contact" class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.9723010912167!2d85.3144195150623!3d27.718141482787384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191cc4cdca59%3A0x224b68e3f668beca!2sLainchour+Banquet+Hall!5e0!3m2!1sen!2snp!4v1476868155534"   width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br /><br>
                <u>Details:</u><br>
                Email : {{$vd->email}} <br>
                Phone 1 : {{$vd->phone_no}} <br>
                Phone 2 : {{$vd->phone_no_2}} <br>
                Space Area : {{$vd->space_area}} <br>
                Capacity : {{$vd->person_capacity}} <br>
                Locality : {{$vd->locality}} <br>
                Established Date : {{$vd->established_date}} <br>
                Hall Charge : Rs {{$vd->hall_charge}} <br>

            </div>
        </div>
    </div>
    <br>
    @if(!Auth::check() || Auth::user()->user_type_id==3)
        @if(!Auth::check())
            <h4 style="text-align: center"><a href="/Book?id={{$vd1->venue_id}}"><button class="btn-success">Book Now</button></a></h4>
            @elseif(Auth::user()->user_type_id==3)
              <h4 style="text-align: center"><a href="Book?id={{$vd1->venue_id}}"><button class="btn-success">Book Now</button></a></h4>
            @endif

    @endif

@endsection