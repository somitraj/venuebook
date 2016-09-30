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
            <ul class="nav navbar-nav">
                <li class="active" ><a href="/" class="glyphicon glyphicon-bell"> Home </a></li>
                <li><a href="/My Account" class="glyphicon glyphicon-user"> My Account</a></li>
                <li><a href="/Notification" class="glyphicon glyphicon-globe"> Notification<span class="badge">0</span></a></li>
                <li><a href="/Feeback" class="glyphicon glyphicon-tags"> Feedback</a></li>

                        <span class="caret"></span>

                        <ul class="dropdown-menu">/

                            <li><a href="#">Username</a></li>
                            <li><a href="#">Password</a></li>
                        </ul>
                    </a></li>


        </div>
    </nav>
    <button type="button" class="btn btn-primary" style="float: right ">
        <span class="glyphicon glyphicon-log-out"></span>Logout
    </button>



@endsection