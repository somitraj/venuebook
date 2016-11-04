<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 10/30/2016
 * Time: 4:59 PM
 *
 */
$proimage=\Venue\GetImage::getImage();
foreach($proimage as $pro){
    if($pro->user_id== Auth::user()->id){
        $pro1=$pro->profile_image;
    }
}
?>


@extends('Layout/MainLayout')

@section('content')
    <div >
        @if(Auth::check())
            <div>
                <img src="/{{$pro1}}"class="img-circle" width="70" height="70">
            </div>
            <h5>
                <div>
                    {{Auth::user()->username}}
                </div>
            </h5>
        @endif
    </div>

    @endsection
