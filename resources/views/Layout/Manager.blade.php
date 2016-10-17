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
                <li><a href="/DashBoard" class="glyphicon glyphicon-dashboard"> Dashboard </a></li>
                <li><a href="/MyAccount" class="glyphicon glyphicon-user"> MyAccount</a></li>
                <li><a href="/Notification" class="glyphicon glyphicon-globe" > Notification <span class="badge">4</span></a></li>
                <li class="dropdown"><a href="/Inventory" class="glyphicon glyphicon-list-alt"> Inventory</a></li>
                <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>


                <a href="/logout" type="button" class="btn btn-primary" style="float: right margin:left;margin-left: 665px;">
                    <span class="glyphicon glyphicon-log-out "></span>Logout
                </a>

            </ul>
        </div>

    </nav>
    @yield('manager-content')
@endsection
