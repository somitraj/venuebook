<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
?>
@extends('Layout/MainLayout')
@extends('Layout/Admin')
           @section('content')

        {{--<div id="toplink">--}}
            <div class="nav nav-tabs">
               <li> <a href="managerlist" role="navigation" class="nav navbar-default ">Manager<span class="badge">{{count($managerlist)}}</span></a></li>


               <li> <a href="venuelist" role="navigation" class="nav navbar-default ">Venue<span class="badge"></span></a></li>


            </div>
{{--</div>--}}
            <a href="venuelist">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type name</th>
                       {{-- <th>Option</th>--}}
                    </tr>
                    </thead>
                    @foreach($managerlist as $user)
                        <tr>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type_name}}</td>

{{--
                            <td><button class="btn-primary">view</button></td>
--}}

                        </tr>
                    @endforeach
                </table>
            </div>
</a>



            @endsection



