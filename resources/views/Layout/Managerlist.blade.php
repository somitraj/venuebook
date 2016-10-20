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
                <h2>ManagerList<span class="badge">{{$all_manager}}</span></h2>
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
                        </tr>
                    @endforeach
                </table>
            </div>

            </body>
            </html>

           @endsection
