<?php
?>

@extends('Layout/MainLayout')
@section('content')

    <div>
        @if(Auth::check())
            <div>
                <img src="/uploads/{{Auth::user()->profile_image}}"class="img-circle" width="70" height="70">
            </div>
            <h5>
                <div>
                    {{Auth::user()->username}}
                </div>
            </h5>
        @endif
    </div>




  @endsection
@section('content')
    <br><br>

    <div class="row" style="border: 1px solid;    padding-top: 20px;  background-color: #F8F6F2;margin-left: 80px;margin-right: 80px;">
        <div class="form-group col-lg-4">
        </div>

        <div class="form-group col-lg-4">
            <div class="input-group">
                <input type="text" class="form-control" id="usr" placeholder="Search Your Venue By Capacity / Location">

                <span class="input-group-btn" ><button type="button" class="btn btn-primary">Search</button></span>
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
        {{--  <h5><a href="#"> advanced search>></a></h5>--}}


    </div>


    </div>







    <!--start-->
    <div style="width:1000px;margin:20px auto;">
        <h2><b>Trending :</b></h2>
        <div id="ninja-slider" style="float:left;">
            <div class="slider-inner">
                <ul>
                    <li><a href="/Lainchaur"><img class="ns-img" src="images/venue1.jpg"></a></li>
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
                    <li><a href="/Shanker"><img class="ns-img" src="images/venue3.jpg"></a></li>
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
        <div id="thumbnail-slider" style="float:left;">
            <div class="inner">
                <ul>
                    <li>
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
                    </li>
                </ul>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>

    </body>
    </html>



@endsection