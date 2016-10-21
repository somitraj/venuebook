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
            <div class="container">
                <h2>VenueList<span class="badge">{{count($venuelist)}}</span></h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Venue Name</th>
                        <th>Image</th>
                        <th>Established date</th>
                        <th>Phone no1</th>
                        <th>Phone no2</th>
                        <th>Country</th>
                        <th>Province</th>
                        <th>Zone</th>
                        <th>District</th>
                        <th>Locality</th>
                        <th>Space area</th>
                        <th>Person capacity</th>

                    </tr>
                    </thead>
                    @foreach($venuelist as $venue)
                        <tr>
                            <td>{{$venue->name}}</td>
                            <td>{{$venue->image}}</td>
                            <td>{{$venue->established_date}}</td>
                            <td>{{$venue->phone_no}}</td>
                            <td>{{$venue->phone_no_2}}</td>
                            <td>{{$venue->country_id}}</td>
                            <td>{{$venue->province_id}}</td>
                            <td>{{$venue->zone_id}}</td>
                            <td>{{$venue->district_id}}</td>
                            <td>{{$venue->locality_id}}</td>
                            <td>{{$venue->space_area}}</td>
                            <td>{{$venue->person_capacity}}</td>
                            <td><button class="btn-primary">view</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>


            </body>
            </html>

            @endsection



