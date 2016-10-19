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
    {{--<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>--}}




@endsection
@section('content')
    <br><br>
    <div style="width:1000px;margin:10px auto;">
        <h2><b>Photos</b></h2>
        <div id="ninja-slider" style="float:left;">
            <div class="slider-inner">
                <ul>
                    <li><a class="ns-img" href="images/Lainchaur banquet1.jpg"></a></li>
                    <li><a class="ns-img" href="images/Lainchaur banquet2.jpg"></a></li>
                    <li><a class="ns-img" href="images/Lainchaur banquet3.jpg"></a></li>
                    <li><a class="ns-img" href="images/Lainchaur banquet4.jpg"></a></li>
                    <li><a class="ns-img" href="images/Lainchaur banquet5.jpg"></a></li>
                    <li><a class="ns-img" href="images/Lainchaur banquet6.jpg"></a></li>
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>

</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    {{--<div class="panel panel-primary">
                        <div class="panel-heading ">--}}

                            <a>
                                <img style=width:150px;height:100px;" src="/images/lainchaur.jpg"/></a>
                              <h4 style="text-align:left">Lainchaur Banquet</h4>

                            <div class="col-md-8">
                        <h5> It is one the best places in the capital where the finest banquet facilities are offered together with unparalleled service and quality food</h5>
                    </div>
                            {{--</div>
                    </div>--}}
                </div>
            </div>
        </div>

        </body>
        </html>
@endsection
