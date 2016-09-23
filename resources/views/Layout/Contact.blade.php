
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
        <li ><a href="/" class="glyphicon glyphicon-home" > Home</a></li>
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
                <!-- Map -->
                <div id="contact" class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.279219636636!2d85.31621821465625!3d27.708663982791332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19012eb40b3d%3A0xc2999e48372cb1f2!2sHERITAGE+PLAZA+II!5e0!3m2!1sen!2snp!4v1474557098840" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <br />
                    {{--<small>
                        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
                    </small>--}}
                    </iframe>
                </div>
                <!-- /Map -->
            </div>
        </div><!-- /map-outer -->
    </div> <!-- /row -->
    </div>


</div>

@endsection