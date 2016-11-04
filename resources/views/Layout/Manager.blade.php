<?php

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
                        <h6 style="text-align:center">NOTIFICATION</h6></div>
                    <div class="panel-body"><a href="Notification" class="panel"> <img src="/images/notification.png" class="panel" style="width:100%" alt="Image"></a></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h6 style="text-align:center">INVENTORY</h6></div>

                    <div class="panel-body"><a href="inventory" class="panel"><img src="/images/inventory.png" class="panel" style="width:100%" alt="Image"></a></div>
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
            <div class="panel-body"><a href="gallery" class="panel"><img src="/images/gallery.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
        </div>
    </div>
    </div>
    </div>
    <br>
<br>

@endsection



