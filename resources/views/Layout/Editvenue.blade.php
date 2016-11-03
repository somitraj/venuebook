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
@section('content')
    @if(Auth::check())  {{--login check garne--}}
    <div>
        <img src="/{{$pro1}}"class="img-circle" width="70" height="70">
    </div>
    <h5>
        <div>
            {{Auth::user()->username}}{{--admin login vaye paxi user_id lisakya hunxa so aba user table bata tesko username page ma dekhauna ko lagi--}}
        </div>
    </h5>
    @endif

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-primary">
                <div class="panel-heading">
                    <h4 style="text-align:center"> Venue gestion</h4>
                </div>
                <div class="panel-body">
                    {!! form($form1) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
