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
        @if(Auth::check())
            <div>
                <img src="/{{Auth::user()->profile_image}}"class="img-circle" width="70" height="70">
            </div>
            <h5>
                <div>
                    {{Auth::user()->username}} {{--manager login vaye paxi user_id lisakya hunxa so aba user table bata tesko username page ma dekhauna ko lagi--}}
                </div>
            </h5>
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading ">
                        <h6 style="text-align:center">NOTIFICATION</h6></div>
                    <div class="panel-body"><a href="Notification" class="panel"> <img src="/images/notification.png" class="panel" style="width:100%" alt="Image"></a></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h6 style="text-align:center">INVENTORY</h6></div>

                    <div class="panel-body"><a href="feedback" class="panel"><img src="/images/inventory.png" class="panel" style="width:100%" alt="Image"></a></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h6 style="text-align:center">FEEDBACK</h6></div>
                    <div class="panel-body"><a href="feedback" class="panel"><img src="/images/feedback.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
                </div>
            </div>
    </div>

    <div class="row">
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 style="text-align:center">GALLERY</h6></div>
            <div class="panel-body"><a href="venue" class="panel"><img src="/images/gallery.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
        </div>
    </div>
    </div>
    </div>
    <br>


@endsection



