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
        @endsection
</div>
@section('content')

        {{--<style type="text/css">
                .popup:hover{
                        width: 400px;
                        height:200px;
                }

        </style>--}}
        <div class="container">

                <h3>Venue Gallery :</h3>
                <div id="gallery">

                @foreach($gallerydata as $g1)
                        <img {{--class="popup" --}}src="/{{$g1->cover}}" width="200" height="200">
                        <img {{--class="popup"--}} src="/{{$g1->image1}}" width="200" height="200">
                        <img {{--class="popup" --}}src="/{{$g1->image2}}" width="200" height="200">
                        <img {{--class="popup"--}} src="/{{$g1->image3}}" width="200" height="200">
                        <img {{--class="popup"--}} src="/{{$g1->image4}}" width="200" height="200">
                @endforeach

                </div>

        </div>
        {{--<div style="width:1000px;margin:10px auto;">

                <div id="ninja-slider">
                        <div class="slider-inner">
                                <ul>
                                        --}}{{--{{dd($vdata)}}--}}{{--
                                        @foreach($gallerydata as $g1)
                                                <li><img class="ns-img" src="/{{$g1->cover}}">
                                                </li>
                                                <li><img class="ns-img" src="/{{$g1->image1}}">
                                                </li>
                                                <li><img class="ns-img" src="/{{$g1->image2}}">
                                                </li>
                                                <li><img class="ns-img" src="/{{$g1->image3}}">
                                                </li>
                                                <li><img class="ns-img" src="/{{$g1->image4}}">
                                                </li>

                                        @endforeach
                                </ul>
                                <div class="fs-icon" title="Expand/Close"></div>
                        </div>



        </div>
        </div>--}}

        <div class="row" style="padding-top: 50px">
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                                <div class="panel-heading">
                                        <h4 style="text-align:center">update your gallery here</h4>
                                </div>
                                {{--<div class="flash-message">
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                                @if(Session::has('alert-' . $msg))

                                                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                                @endif
                                        @endforeach
                                </div>--}} <!-- end .flash-message -->
                                <div class="panel-body" >
                                        {!! form($form) !!}
                                </div>
                        </div>
                </div>
        </div>

@endsection
