<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
?>
@extends('Layout/MainLayout')
@section('menu')

    <nav class="navbar navbar-default navbar-inverse">
        <div class="container-fluid">

          {{--  <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>--}}
            <ul class="nav navbar-nav">
                <li class="active"  ><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
                <li><a href="/Contact" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
                <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
                <li class="dropdown"><a href="/Register" class="dropdown-toggle glyphicon glyphicon-pencil" data-toggle="dropdown"> Register
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Register">Client</a></li>
                        <li><a href="/Venue">Venue</a></li>
                    </ul>
                </li>
{{--
                <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
--}}
                <li><a href="/login" class="glyphicon glyphicon-hand-right"> Login</a></li>
            </ul>
        </div>
    </nav>
    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>



 {{--  <nav class="navbar navbar-default">
        <div class="navbar-header">

        </div>
    <ul class="nav navbar-nav">
        <li class="active" ><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
        <li><a href="/Contact" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
        <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
        <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
        <li><a href="/login" class="glyphicon glyphicon-hand-right"> Login</a></li>
    </ul>
    </nav>--}}


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
                    <li><a  class="ns-img" href="images/venue1.jpg" ></a></li>
                    <li><a class="ns-img" href="images/venue2.jpg"></a></li>
                    <li><a class="ns-img" href="images/venue3.jpg"></a></li>
                    <li><a class="ns-img" href="images/ALFA house.jpg"></a></li>
                    <li><a class="ns-img" href="images/venue5.jpg"></a></li>
                    <li><a class="ns-img" href="images/venue6.jpg"></a></li>
                    <li><a class="ns-img" href="images/venue7.jpg"></a></li>
                    <li><a class="ns-img" href="images/venue8.jpg"></a></li>
                    <li><a class="ns-img" href="images/venue9.jpg"></a></li>
                    <li><a class="ns-img" href="images/venue1.jpg"></a></li>
                    <li><a class="ns-img" href="images/venue2.jpg"></a></li>
                    <li><a class="ns-img" href="images/venue3.jpg"></a></li>
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
        <div id="thumbnail-slider" style="float:left;">
            <div class="inner">
                <ul>
                    <li>
                        <a class="thumb" href="images/venue1.jpg" ></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue2.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue3.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue4.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue5.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue6.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue7.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue8.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue9.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue1.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue2.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/venue3.jpg"></a>
                    </li>
                </ul>
            </div>
        </div>
       <div style="clear:both;"></div>
   </div>

    </body>
    </html>



@endsection