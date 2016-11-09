<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
if(Auth::check()){

        $proimage=\Venue\GetImage::getImage();
        foreach($proimage as $pro){
                if($pro->user_id== Auth::user()->id){
                        $pro1=$pro->profile_image;
                }
        }}
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

        <div class="container" style="max-width: 500px;">
        <div class="table-responsive">
                <h2>Inventory list</h2>

                        <table class="table table-hover table-bordered">
                                <thead align="center">
                                <tr class="success" >
                                        <td><b>Item name</b></td>
                                        <td><b>Price per</b></td>
                                        <td><b>Item Type</b></td>


                                </tr>
                                </thead>
                                <tbody align="center">
                                @foreach($inventorylist as $in)
                                        <tr>
                                                <td >{{$in->item_name}}</td>
                                                <td>{{$in->price_per}}</td>
                                                <td>{{$in->item_type}}</td>



                                        </tr>
                                @endforeach
                                </tbody>

                        </table>
        </div>
                </div>




        <div class="row" style="padding-top: 50px">
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                                <div class="panel-heading">
                                        <h5 style="text-align:center">Update Inventory</h5>
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

@endsection
