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
        <li class="active" ><a href="/" class="glyphicon glyphicon-dashboard"> Dashboard</a></li>
        <li><a href="/Notification" class="glyphicon glyphicon-bell"> <span class="badge">0</span> Notification</a></li>
        <li><a href="/Client" class="glyphicon glyphicon-user"> Client</a></li>
        <li><a href="/Venue" class="glyphicon glyphicon-group"> Venue</a></li>
        <li><a href="/Settings" class="glyphicon glyphicon-cog dropdown-toggle"> Settings

                <span class="caret"></span>

                <ul class="dropdown-menu">/

                <li><a href="#">Username</a></li>
                <li><a href="#">Password</a></li>
            </ul>
            </a></li>
        <button type="button" class="btn btn-primary" style="float: right ">
            <span class="glyphicon glyphicon-log-out "></span>Logout
        </button>

            </div>
        </nav>
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="..." alt="...">
                        </a>
                    </div>
                    ...
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ">
                                    <h6 style="text-align:center">NOTIFICATION</h6></div>
                                     <a href="#" class="thumbnail">
                            <img src="..." alt="...">
                        </a>
                                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">CLIENT</h6></div>
                                     <a href="#" class="thumbnail">
                            <img src="..." alt="...">
                        </a>
                                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">VENUE</h6></div>
                                     <a href="#" class="thumbnail">
                            <img src="..." alt="...">
                        </a>
                                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h6 style="text-align:center">SETTINGS</h6></div>
                                 <a href="#" class="thumbnail">
                            <img src="..." alt="...">
                        </a>
                            <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        </div>
                    </div>
                </div>
                </div><br>


            @endsection

