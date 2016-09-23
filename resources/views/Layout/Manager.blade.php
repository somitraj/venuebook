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
        <li><a href="/Notification" class="glyphicon glyphicon-globe"><button class="btn btn-primary" type="button">
                Notification <span class="badge">4</span>
            </button></a></li>
        <li><a href="/Inventory" class="glyphicon glyphicon-list-alt"> Inventory</a></li>
        <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>

    </ul>
    </nav>
    <button type="button" class="btn btn-default btn-md" style="float: right">
        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log Out
    </button>
@endsection
