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
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel-primary">
            <div class="panel-heading">
                <p style="text-align:center"> Venue Type</p>
            </div>
            <div class="panel-body">
                {!! form($form) !!}
            </div>
        </div>
    </div>
</div>

@endsection

<!--@extends('Layout/MainLayout')
@section('content')

<br>
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
                    Users gestion
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <span class="fa fa-user"></span> <a href="client">Users</a> / Edition
                    </li>
                </ol>
            </div>

            <h2>Edition</h2>


@endsection-->
            <!--<div id="page-wrapper">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Users gestion
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <span class="fa fa-user"></span> <a href="client">Users</a> / Edition
                                </li>
                            </ol>
                            <div class="panel-body">
                                {!! form($form) !!}
                            </div>
                        </div>
                    </div>
            </div>
            -->

