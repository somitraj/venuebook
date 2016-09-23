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
        <li><a href="/DashBoard" class="glyphicon glyphicon-dashboard"> Dashboard </a></li>
        <li><a href="/MyAccount" class="glyphicon glyphicon-user"> MyAccount</a></li>
        <li><a href="/Notification" class="glyphicon glyphicon-globe"> Notification</a></li>
        <li><a href="/Inventory" class="glyphicon glyphicon-list-alt"> Inventory</a></li>
        <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>

    </ul>
    </nav>

@endsection
