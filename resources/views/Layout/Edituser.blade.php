<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
$proimage=\Venue\GetImage::getImage();
foreach($proimage as $pro){
    if($pro->user_id== Auth::user()->id){
        $pro1=$pro->profile_image;
    }
}
?>
@extends('Layout/Mainlayout')
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


    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel-primary">
            <div class="panel-heading">
                <h4 style="text-align:center"> User gestion</h4>
            </div>
            <div class="panel-body">
                {!! form($form) !!}
            </div>
        </div>
    </div>
</div>
@endsection
