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
                @if(Auth::check())  {{--login check garne--}}
                    <div>
                        <img src="/{{Auth::user()->profile_image}}"class="img-circle" width="70" height="70">
                    </div>
                <h5>
                    <div>
                        {{Auth::user()->username}}{{--admin login vaye paxi user_id lisakya hunxa so aba user table bata tesko username page ma dekhauna ko lagi--}}
                    </div>
                </h5>
                @endif
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ">
                                   <h6 style="text-align:center">NOTIFICATION</h6></div>
                                <div class="panel-body"><a href="Notification" class="panel"> <img src="/images/notification.png" class="panel" style="width:100%" alt="Image"></a></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">CLIENT</h6></div>

                                <div class="panel-body"><a href="client" class="panel"><img src="/images/client.png" class="panel" style="width:100%" alt="Image"></a></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">VENUE</h6></div>
                                <div class="panel-body"><a href="venue" class="panel"><img src="/images/venue.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
                            </div>
                        </div>
                    </div>
                   {{-- <div class="col-sm-4">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 style="text-align:center">SETTINGS</h6></div>

                            <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        </div>
                    </div>--}}
                </div>
                <br>
            <br>
            <div>
                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Phone 1</th>
                        <th>Phone 2</th>
                        <th>Person Capacity</th>
                        <th>Space Area</th>
                        <th>Locality</th>
                        <th>Established Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@foreach($users as $user)
                        <tr>
                            <td>{{$user->email}}</td>

                            @foreach($venues as $venue)
                                @if(($user->id)==($venue->id))
                                    <td>{{$venue->phone_no}}</td>
                                    <td>{{$venue->phone_no_2}}</td>
                                    <td>{{$venue->person_capacity}}</td>
                                    <td>{{$venue->space_area}}</td>
                                    <td>{{$venue->locality}}</td>
                                    <td>{{$venue->established_date}}</td>
                                @endif
                            @endforeach

                        </tr>
                    @endforeach
                    </tbody>--}}
                </table>
            </div>



           @endsection

