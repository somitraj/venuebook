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
        <li><a href="/dashboard" class="glyphicon glyphicon-dashboard"> Dashboard</a></li>
        <li><a href="/Notification" class="glyphicon glyphicon-bell"> <span class="badge">0</span> Notification</a></li>
        <li class="active"><a href="Client" class="glyphicon glyphicon-user"> Client</a></li>
        <li><a href="/Venue" class="glyphicon glyphicon-group"> Venue</a></li>
        </ul>

                <ul class="nav navbar-nav navbar-right">
        <li class="dropdown" >
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" >
                <i class="fa fa-user fa-fw"></i>User Account <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> My Account</a>
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

            <div >
                @if(Auth::check())
                    <div>
                        <img src="/{{Auth::user()->profile_image}}"class="img-circle" width="70" height="70">
                    </div>
                <h5>
                    <div>
                        {{Auth::user()->username}}
                    </div>
                </h5>
                @endif
                </div>

{{--@section('content')--}}
                <div class="container">
                    <h2>UserList</h2>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                @endforeach
                    </table>
                </div>

                </body>
                </html>

 @endsection

