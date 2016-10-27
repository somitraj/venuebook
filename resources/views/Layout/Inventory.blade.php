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

@section('content')
        <div>
                @if(Auth::check())
                        <div>
                                <img src="/{{$pro1}}"class="img-circle" width="70" height="70">
                        </div>
                        <h5>
                                <div>
                                        {{Auth::user()->username}} {{--manager login vaye paxi user_id lisakya hunxa so aba user table bata tesko username page ma dekhauna ko lagi--}}
                                </div>
                        </h5>
                @endif
        </div>
        <div class="row" style="padding-top: 50px">
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                                <div class="panel-heading">
                                        <h4 style="text-align:center">Inventory</h4>
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
