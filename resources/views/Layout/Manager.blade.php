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
                <li><a href="/Notification" class="glyphicon glyphicon-globe" ><button class="btn btn-primary" type="button">
                        Notification <span class="badge">4</span>
                    </button></a></li>
                <li class="dropdown">
                    <a href="/Inventory" class="dropdown-toggle glyphicon glyphicon-list-alt" data-toggle="dropdown"> Inventory
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">List</a></li>
                        <li><a href="/Venue">Register
                            </a></li>
                        </ul>
                </li>



                <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>


    <button type="button" class="btn btn-default btn-md" style="float: right">
        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log Out
    </button>

            </ul>
        </div>

    </nav>
@endsection
