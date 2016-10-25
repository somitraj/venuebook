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
               <div class="table-responsive">
                <h2>UserList <span class="badge">{{count($userlist)}}</span></h2>
                <a href="clientregister">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type name</th>
{{--
                        <th>Option</th>
--}}
                    </tr>
                    </thead>


                    @foreach($userlist as $user)
                        <tr>
                             <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->type_name}}</td></a>
{{--
                            <td><button class="btn-primary">view</button></td>
--}}
                        </tr>
                    @endforeach

                </table></a>
            </div>

            </body>
            </html>

           @endsection
