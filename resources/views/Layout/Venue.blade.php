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
                <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
                <li class="dropdown active"><a href="/Register" class="dropdown-toggle glyphicon glyphicon-pencil" data-toggle="dropdown"> Register
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Register">Client</a></li>
                        <li><a href="/Venue">Venue</a></li>
                    </ul>
                </li>
                {{--
                                <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
                --}}
                <li><a href="/login" class="glyphicon glyphicon-hand-right"> Login</a></li>
            </ul>
        </div>
    </nav>
@endsection
@section('content')
    <div class="row" style="padding-top: 50px">
       <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2">
           <div class="panel panel-primary">
               <div class="panel-heading">
                   <h3 style="text-align:center">Venue</h3>

               </div>
               <div class="panel-body">
                   {!! form($form) !!}
               </div>
           </div>
       </div>
    </div>

@endsection
