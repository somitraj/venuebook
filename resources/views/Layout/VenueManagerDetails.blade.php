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
@section('content')



    @if(Auth::check())  {{--login check garne--}}
    <div>
        <img src="/{{Auth::user()->profile_image}}"class="img-circle" width="70" height="70">
    </div>
    <h5>
        <div>
            {{Auth::user()->username}}{{--admin login vaye paxi user_id lisakya hunxa so aba user table bata tesko username page ma dekhauna ko lagi--}}
        </div>
    </h5>
    @endif
    <div id="page-wrapper">

        <div class="container-fluid">

        <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Venue gestion
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <span class="fa fa-user"></span> <a href="/admin/venue">Venue</a> / Card
                </li>
            </ol>
        </div>

    <h2>Details</h2>
            @foreach($venuedetails as $vdata)
                <img src="/{{$vdata->image}}"> <br>

                Name: {{$vdata->name}}<br>
                Email : {{$vdata->email}} <br>
                Phone 1 : {{$vdata->phone_no}} <br>
                Phone 2 : {{$vdata->phone_no_2}} <br>
                Space Area : {{$vdata->space_area}} <br>
                Capacity : {{$vdata->person_capacity}} <br>
                Locality : {{$vdata->locality}} <br>
                 Established Date : {{$vdata->established_date}}<br>
                @endforeach


</div>
            </div>

    </div>

@endsection
