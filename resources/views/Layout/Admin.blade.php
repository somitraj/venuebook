<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
$userlist=\Venue\notification::getUser();
$managerlist=\Venue\notification::getManager();
$notices=\Venue\notification::getNotification();
$proimage=\Venue\GetImage::getImage();
foreach($proimage as $pro){
    if($pro->user_id== Auth::user()->id){
        $pro1=$pro->profile_image;
    }
}
?>
@extends('Layout/MainLayout')
           @section('info')

            <div style="float: right">

                @if(Auth::check())  {{--login check garne--}}
                    <div>
                       <p  style="font-family:'Times New Roman';color:gray;border-top-width: 50px;margin-top: 5px;">
                           <img src="/{{$pro1}}"class="img-circle" width="40" height="40">  Hello   {{Auth::user()->username}} ,</p>

                    </div>

                @endif
                </div>
               @endsection
@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ">
                                   <h6 style="text-align:center">NOTIFICATION       <span class="badge">{{count($notices)}}</span>     </h6></div>
                                <div class="panel-body"><a href="notice" class="panel"> <img src="/images/notification.png" class="panel" style="width:100%" alt="Image"></a></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">CLIENT</h6></div>

                                <div class="panel-body"><a href="client" class="panel"><img src="/images/client.png" class="panel" style="width:100%" alt="Image"></a></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">VENUE</h6></div>
                                <div class="panel-body"><a href="venue" class="panel"><img src="/images/venue.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
                            </div>
                        </div>
                    </div>
                   {{-- <div class="col-sm-4">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 style="text-align:center">SETTINGS</h6></div>

                            <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        </div>
                    </div>--}}
                </div>
                <br>
            <br>



           @endsection

