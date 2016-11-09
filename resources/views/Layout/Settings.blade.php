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
    <br><br><br><br>
    <div class="container text-center">
        @foreach($userlist as $user)
     <a href="useredit\{{$user->id}}"><button class="btn-success">Edit Personal Information</button></a>
            <br>
        <br>
        <br>
        <a href="password"><button class="btn-success">Change Password</button></a>
            @endforeach
            <br><br><br><br><br>
    </div>
    @endsection

