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
    <img style=width:150px;height:100px;margin-left:80px;" src="/images/lainchaur.jpg"/>
    <h4 style="text-align:left;margin-left:80px;">Lainchaur Banquet</h4>

    <br>
    {{--<div class="container">
    <div class="row">
        <div class="col-lg-4">--}}
    <div class="row">
        <div class="col-md-8">

            <div style="width:1000px;margin:10px auto;">
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
  {{--  <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>

--}}


@endsection
@section('content')

    <br><br>
    <div style="width:1000px;margin:10px auto;">
        <h2><b>Photos</b></h2>
        <div id="ninja-slider" style="float:left;">
            <div class="slider-inner">
                <ul>
                    <li><a class="ns-img" href="images/sasa banquet.jpg"></a></li>
                    <li><a class="ns-img" href="images/sasa banquet1.jpg"></a></li>
                    <li><a class="ns-img" href="images/sasa2.jpg"></a></li>
                    <li><a class="ns-img" href="images/sasa3.jpg"></a></li>

                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
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
            Details:SASA Banquet and Event Management is a wholesome complete catering service and event management business company. After our various catering and banquet business work since 1998 we are today established as a successful banquet company in Nepal with young, imaginative, keen and dynamic professionals with a sparkling stream of ideas having vast experience in the field of catering services and events.Launching our various services like catering management, event production and execution and its effective marketing works SASA has been now called the best banquet in the city by many people and corporate houses which is proudly to say our biggest achievement of our career. Our vision is to be the client’s first choice provider of quality, service & value in the national market-place.

        </div>
    </div>
    </div>
    <br>
    <h4 style="text-align: center"><a href="/Book"><button class="btn-success">Book Now</button></a></h4>
@endsection






