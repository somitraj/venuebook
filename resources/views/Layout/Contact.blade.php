
<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
?>
@extends('Layout/MainLayout')
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
            <div id="map-container" class="col-md-8">
                Here Goes The Map
            </div>
        </div><!-- /map-outer -->
    </div> <!-- /row -->
    </div>


</div>

@endsection