<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
        ?>
@extends('Layout/MainLayout')
@section('menu')
        <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                        {{--  <div class="navbar-header">
                              <a class="navbar-brand" href="#">WebSiteName</a>
                          </div>--}}
                        <ul class="nav navbar-nav">
                                <li  ><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
                                <li><a href="/Contact" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
                                <li class="active"><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
                                <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
                                <li><a href="/login" class="glyphicon glyphicon-hand-right"> Login</a></li>
                        </ul>
                </div>
        </nav>
@endsection
@section('content')
        <div class="row" style="padding-top: 50px">
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                                <div class="panel-heading">
                                        <h3 style="text-align:center">Feedback</h3>
                                </div>
                                <div class="flash-message">
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                                @if(Session::has('alert-' . $msg))

                                                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                                @endif
                                        @endforeach
                                </div> <!-- end .flash-message -->
                                <div class="panel-body" >
                                        {!! form($form) !!}
                                </div>
                        </div>
                </div>
        </div>

@endsection
