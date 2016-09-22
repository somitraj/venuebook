
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
    <p>Feel Free To Contact Us :</p>
    <div class="glyphicon glyphicon-globe">Our Office</div>

    <div class="map">Maps</div>
    <h3>Google Map</h3>
    <script>
        function initMap(){
            var mapDiv=document.getElementById('map');
            var map=new google.maps.Map(mapDiv,{
                center:{lat:44.540, lng: -78.546},
                zoom:8
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>

</div>

@endsection