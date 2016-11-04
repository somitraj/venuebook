<?php


/**
 * Created by PhpStorm.
 * User: hp
 * Date: 10/29/2016
 * Time: 3:21 PM
 *
 */
/*$userlist=\Venue\notification::getUser()*/
        ?>
@extends('Layout/MainLayout')
@section('content')
    <br><br><br><br>
    <div class="container text-center">
        @foreach($userlist as $user)
     <a href="useredit\{{$user->id}}"><button class="btn-success">Edit Personal Information</button></a>
            <br>
        <br>
        <br>
        <a href="password"><button class="btn-success">Change Password</button></a>
            @endforeach
            <br><br><br><br><br>
    </div>
    @endsection

