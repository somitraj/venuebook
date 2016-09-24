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
        <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid">
                        {{--  <div class="navbar-header">
                              <a class="navbar-brand" href="#">WebSiteName</a>
                          </div>--}}
                        <ul class="nav navbar-nav">
                                <li><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
                                <li><a href="/Contact" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
                                <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
                                <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
                                <li class="active"><a href="/login" class="glyphicon glyphicon-hand-right"> Login</a></li>
                        </ul>
                </div>
        </nav>
@endsection
@section('content')
        <div class="row" style="padding-top: 50px">
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                                <div class="panel-heading">
                                        <p style="text-align:center">Login</p>
                                </div>
                                <div class="panel-body">
                                        {!! form($form) !!}
                                </div>
                        </div>
                </div>
        </div>


@endsection
@section('script')
<script>
        $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
        });
</script>
        @endsection