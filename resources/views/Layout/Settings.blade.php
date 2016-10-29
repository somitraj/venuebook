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
    <div class="container text-center">
        @foreach($userlist as $user)
     <a href="useredit\{{$user->id}}"><button class="btn-success">Edit Personal Information</button></a>

        <br>
        <br>
        <a href="/#"><button class="btn-success">Change Password</button></a>
            @endforeach
    </div>
    @endsection

