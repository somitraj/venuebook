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
    <a>
        <img style=width:150px;height:100px;" src="/images/lainchaur.jpg"/></a>
    <h4 style="text-align:left">Lainchaur Banquet</h4>

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
