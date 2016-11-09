<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
$proimage=\Venue\GetImage::getImage();
foreach($proimage as $pro){
        if($pro->user_id== Auth::user()->id){
                $pro1=$pro->profile_image;
        }
}
        ?>
@extends('Layout/MainLayout')
@section('info')
        <div style="float: right">

                @if(Auth::check())  {{--login check garne--}}
                <div>
                        <p  style="font-family:'Times New Roman';color:gray;border-top-width: 50px;margin-top: 5px;">
                                <img src="/{{$pro1}}"class="img-circle" width="40" height="40">  Hello   {{Auth::user()->username}} ,</p>

                </div>

                @endif
                @endsection

@section('content')

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
                                                        {{--<td>
                                                                @if(($user->role_type)==1)
                                                                        Admin
                                                                @else
                                                                        User
                                                                @endif

                                                        </td>
                                                        <td><a href="{{ route('usersee',['id' => $user->id]) }}" class="btn btn-primary btn-ms">View</a></td>
                                                        <td><a href="{{ route('noticeedit',['id'=> $user->id]) }}" class="btn btn-primary btn-ms">Edit</a></td>
                                                    --}}   {{-- <td><button type="button" class="btn btn-danger">Delete</button></td>--}}
                                                </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                        </div>
                </div>
        </div>

@endsection
