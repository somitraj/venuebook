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
                                <td>{{$user->type_name}}</td>

                        </tr>
                    @endforeach

                </table></a>
            </div>



           @endsection
