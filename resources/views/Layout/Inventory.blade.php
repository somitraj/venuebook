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
        <div class="row" style="padding-top: 50px">
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                                <div class="panel-heading">

                                        <h4 style="text-align:center">You Have <span class="badge">{{count($notices)}}</span> Notifications</h4>

                                </div>

                        </div>
                        <div class="panel-body">
                                <table class="table table-hover table-responsive table-bordered "  >
                                        <thead class="thead-inverse">
                                        <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Comment</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($notices as $notice)
                                                <tr>
                                                        <td>{{$notice->first_name}} </td>
                                                        <td>{{$notice->last_name}}</td>
                                                        <td>{{$notice->email}}</td>
                                                        <td>{{$notice->comment}}</td>
                                                </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                        </div>
                </div>
        </div>

@endsection
