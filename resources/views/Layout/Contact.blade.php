
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
                <li  ><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
                <li class="active"><a href="/Contact" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
                <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
                <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
                <li><a href="/login" class="glyphicon glyphicon-hand-right"> Login</a></li>
            </ul>
        </div>
    </nav>
@endsection
@section('content')
<div>
    <marquee direction="right"> <h3>Feel Free To Contact Us :</h3></marquee>
    <h3><div class="glyphicon glyphicon-globe" style="padding-left: 40px">Contact Info:</div></h3>


    <div class="map" >
    <div class="row">
        <div id="map-outer" class="col-md-12">
            <div id="address" class="col-md-4" style="padding-left: 100px;padding-top: 50px">
                <h2>Our Location</h2>
                <address>
                    <strong>AuxFin Pvt Ltd.</strong><br>
                    Kamaladi<br>
                    14404<br>
                    Kathmandu<br>
                    Nepal<br>
                    <abbr>Phone:</abbr> +01-4255565
                </address>

            </div>
            <div class="map-container" class="col-md-8">
              <div id="map"></div>
                <!-- Map -->
                <div id="contact" class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.279219636636!2d85.31621821465625!3d27.708663982791332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19012eb40b3d%3A0xc2999e48372cb1f2!2sHERITAGE+PLAZA+II!5e0!3m2!1sen!2snp!4v1474557098840" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <br />

                </div>
                <!-- /Map -->
            </div>
        </div><!-- /map-outer -->
    </div> <!-- /row -->
    </div>


</div>

@endsection