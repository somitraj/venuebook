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
        <li class="dropdown" style="left:900px;">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" >
                <i class="fa fa-user fa-fw"></i>User Account <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>


        </ul>
       {{-- <a href="/logout" type="button" class="btn btn-primary" style="float: right margin:left;margin-left: 665px;">
            <span class="glyphicon glyphicon-log-out "></span>Logout
        </a>--}}


            </div>
        </nav>


                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ">
                                    <h6 style="text-align:center">NOTIFICATION</h6></div>



                                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">CLIENT</h6></div>

                                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">VENUE</h6></div>

                        </a>
                                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 style="text-align:center">SETTINGS</h6></div>

                            <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        </div>
                    </div>
                </div>
                </div><br>


            @endsection

