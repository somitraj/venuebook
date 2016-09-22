
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
    <nav class="navbar navbar-default">
        <div class="navbar-header">

        </div>
    <ul class="nav navbar-nav">
        <li ><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
        <li class="active"><a href="/Contact" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
        <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
        <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
        <li><a href="/login" class="glyphicon glyphicon-hand-right"> Login</a></li>
    </ul>
    </nav>
@endsection
@section('content')
<div>
    <marquee direction="right"> <h3>Feel Free To Contact Us :</h3></marquee>
    <h3><div class="glyphicon glyphicon-globe">Contact Info:</div></h3>

    <div class="map">
    <div class="row">
        <div id="map-outer" class="col-md-12">
            <div id="address" class="col-md-4">
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
                <script>
                    function initMap() {
                        var mapCanvas = document.getElementById("map");
                        var mapOptions = {
                            center: new google.maps.LatLng(28.0, 84.0),
                            zoom: 10
                        }
                        var map = new google.maps.Map(mapCanvas, mapOptions);
                    }
                </script>

                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?callback=initMap">
                </script>
            </div>
        </div><!-- /map-outer -->
    </div> <!-- /row -->
    </div>


</div>

@endsection