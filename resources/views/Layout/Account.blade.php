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
    <div class="container">
<div class="table-responsive">
    <h4>My Account</h4>
    <br>
    @foreach($account as $ac1)
    <img src="/{{$ac1->profile_image}}" width="100" height="100">
    @endforeach
    <br>
    <br>
    @foreach($account as $ac)
        <table class="table table-hover table-bordered table-responsive">
            <thead>
            <tr>
                <th>Firstname</th>
                <td>{{$ac->first_name}}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{$ac->last_name}}</td>

            </tr>


                <tr>
                    <th>Username</th>
                    <td>{{$ac->username}}</td>
                    </tr>
            <tr>
                    <th>Email</th>
                    <td>{{$ac->email}}</td>
                </tr>
            <tr>
                <th>DOB</th>
                <td>{{$ac->dob}}</td>
            </tr>
            <tr>
                <th>Phone no.</th>
                <td>{{$ac->phone_no}}</td>
            </tr>
            <tr>
                <th>Mobile no.</th>
                <td>{{$ac->mobile_no}}</td>
            </tr>
            <tr>
                <th>Locality</th>
                <td>{{$ac->locality}}</td>
            </tr>
            <tr>
                <th>Identity Image</th>
                <td><img src="/{{$ac1->identity_image}}" width="100" height="100"></td>
            </tr>
            <tr>
                <th>Nationality ID</th>
                <td>{{$ac->nationality_id}}</td>
            </tr>
            @endforeach
            </thead>
        </table>
</div>
    </div>
    @endsection