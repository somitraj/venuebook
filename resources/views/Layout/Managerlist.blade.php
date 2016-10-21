<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
?>
@extends('Layout/MainLayout')
           @section('content')

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
            <div class="container">
                <h2>ManagerList<span class="badge">{{count($managerlist)}}</span></h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type name</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    @foreach($managerlist as $user)
                        <tr>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type_name}}</td>
                            <td><button class="btn-primary">view</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>

            </body>
            </html>

           @endsection
