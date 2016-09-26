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
        <li class="active" ><a href="/" class="glyphicon glyphicon-bell"> Notification <span class="badge">0</span></a></a></li>
        <li><a href="/Client" class="glyphicon glyphicon-user"> Client</a></li>
        <li><a href="/Venue" class="glyphicon glyphicon-group"> Venue</a></li>
        <li><a href="/Settings" class="glyphicon glyphicon-cog dropdown-toggle"> Settings

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

