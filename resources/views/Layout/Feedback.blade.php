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
        <nav class="navbar navbar-default">
                <div class="navbar-header">

                </div>
        <ul class="nav navbar-nav">
                <li><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
                <li><a href="/Contact" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
                <li class="active" ><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
                <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
                <li><a href="/login" class="glyphicon glyphicon-hand-right"> Login</a></li>
        </ul>
        </nav>
@endsection
@section('content')
        <div class="row">
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                                <div class="panel-heading">
                                        <p style="text-align:center">Feedback</p>
                                </div>
                                <div class="panel-body">
                                        {!! form($form) !!}
                                </div>
                        </div>
                </div>
        </div>

@endsection
