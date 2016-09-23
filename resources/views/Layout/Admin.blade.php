<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
?>
@extends('Layout/AdminLayout')
@section('menu')

    <div class="row">
        <div class="form-group col-lg-11">
        </div>

        <div class="form-group col-lg-1">
            <div class="input-group">
               {{-- <input type="text" class="form-control" id="logout">--}}

                <span class="input-group-btn"><button type="button" class="btn btn-primary">Logout</button></span>

            </div>
            </div>
        </div>
    <nav class="navbar navbar-default">
        <div class="navbar-header">

        </div>
    <ul class="nav navbar-nav">
        <li class="active" ><a href="/" class="glyphicon glyphicon-bell"> Notification</a></li>
        <li><a href="/Client" class="glyphicon glyphicon-user"> Client</a></li>
        <li><a href="/Venue" class="glyphicon glyphicon-group"> Venue</a></li>
        <li><a href="/Settings" class="glyphicon glyphicon-cog"> Settings</a></li>



    </ul>
    </nav>
    </body>
    </html>

@endsection



