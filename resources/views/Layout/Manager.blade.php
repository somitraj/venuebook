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
                <li><a href="dashboard" class="glyphicon glyphicon-dashboard"> Dashboard </a></li>
                <li><a href="/Notification" class="glyphicon glyphicon-globe" >
                        Notification <span class="badge">4</span>
                    </a></li>
                <li class="dropdown">
                    <a href="/Inventory" class="glyphicon glyphicon-list-alt"> Inventory</a></li>





                <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown" {{--style="left:900px;"--}}>
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
        </div>

    </nav>
    <div>
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
    @yield('manager-content')
@endsection
