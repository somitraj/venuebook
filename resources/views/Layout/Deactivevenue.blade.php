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
           @section('content')
               @if(Auth::check())  {{--login check garne--}}
               <div>
                   <img src="/{{$pro1}}"class="img-circle" width="70" height="70">
               </div>
               <h5>
                   <div>
                       {{Auth::user()->username}}{{--admin login vaye paxi user_id lisakya hunxa so aba user table bata tesko username page ma dekhauna ko lagi--}}
                   </div>
               </h5>
               @endif

        {{--<div id="toplink">--}}
            {{--   <div class="table-responsive">--}}
{{--
                   <h2>VenueList <span class="badge">{{count($managerlist)}}</span></h2>
--}}
            <div class="nav nav-tabs">
               <li> <a href="admin/venue" role="navigation" class="nav navbar-default ">Venuelist<span class="badge"></span></a></li>


               <li class="active"> <a href="venuedeactive" role="navigation" class="nav navbar-default ">Deleted venue<span class="badge">{{count($venues)}}</span></a></li>


            </div>
{{--</div>--}}
          {{--  <a href="venuelist">--}}
            <div class="table-responsive">
                {{--<a href="venueregister">--}}
                <table class="table table-bordered">
                        {{--@if (session('status1'))
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    {{session('status1')}}
                                </div>
                            </div>
                        @endif--}}

                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Venue name</th>

                        <th>Email</th>
                        <th>User Type</th>
                        <th></th>
                        <th></th>
                        <th></th>

                    </tr>
                    </thead>
                    @foreach($venues as $venue)
                        <tr>
                            <td>{{$venue->first_name}}</td>
                            <td>{{$venue->last_name}}</td>
                            <td>{{$venue->username}}</td>
                            <td>{{$venue->name}}</td>
                            <td>{{$venue->email}}</td>
                            <td>{{$venue->type_name}}</td>
                            <td><a href="venuedetails\{{$venue->id}}" class="btn btn-success btn-block btn">View</a></td>
{{--
                            <td><a href="editvenuedetails\{{$user->id}}" class="btn btn-warning btn-block btn">Edit</a></td>
--}}
                            <td><a href="venueactive\{{$venue->id}}" class="btn btn-primary btn-block btn">Reactive</a></td>

                        </tr>
                    @endforeach

                </table>
                {{--</a>--}}
            </div>


               <nav aria-label="Page navigation">
                   <ul class="pagination">
                       <li>
                           <a href="#" aria-label="Previous">
                               <span aria-hidden="true">&laquo;</span>
                           </a>
                       </li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#">6</a></li>
                       <li><a href="#">7</a></li>
                       <li><a href="#">8</a></li>
                       <li><a href="#">9</a></li>
                       <li>
                           <a href="#" aria-label="Next">
                               <span aria-hidden="true">&raquo;</span>
                           </a>
                       </li>
                   </ul>
               </nav>
           </body>
            </html>

            @endsection


