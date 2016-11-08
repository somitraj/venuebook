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
    </div>
@endsection
           @section('content')


        {{--<div id="toplink">--}}
            {{--   <div class="table-responsive">--}}
{{--
                   <h2>VenueList <span class="badge">{{count($managerlist)}}</span></h2>
--}}
            <div class="nav nav-tabs">
               <li> <a href="venuedetails" role="navigation" class="nav navbar-default ">Venuelist<span class="badge">{{count($managerlist)}}</span></a></li>


               <li> <a href="deactivevenue" role="navigation" class="nav navbar-default ">Deleted venue<span class="badge"></span></a></li>


            </div>
{{--</div>--}}
          {{--  <a href="venuelist">--}}
            <div class="table-responsive">
                {{--<a href="venueregister">--}}
                <table class="table table-bordered">
                        @if (session('status1'))
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    {{session('status1')}}
                                </div>
                            </div>
                        @endif

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
                    @foreach($managerlist as $user)
                        <tr>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type_name}}</td>
                            <td><a href="venuedetails\{{$user->id}}" class="btn btn-success btn-block btn">View</a></td>
{{--
                            <td><a href="editvenuedetails\{{$user->id}}" class="btn btn-warning btn-block btn">Edit</a></td>
--}}
                            <td><a href="deletevenuedetails\{{$user->id}}" class="btn btn-primary btn-block btn">Delete</a></td>

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



