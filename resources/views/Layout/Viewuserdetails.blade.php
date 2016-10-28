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

                   <br>
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
                   <div id="page-wrapper">

                       <div class="container-fluid">

                       <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">
                           Users gestion
                       </h1>
                       <ol class="breadcrumb">
                           <li class="active">
                               <span class="fa fa-user"></span> <a href="/admin/client">Users</a> / Card
                           </li>
                       </ol>
                   </div>

               <h2>Details</h2>
                           @foreach($userdetails as $userdetail)
                               <img src="/{{$userdetail->profile_image}}"> <br>
                           FirstName: {{$userdetail->first_name}}<br>
                           LastName : {{$userdetail->last_name}} <br>
                           Username : {{$userdetail->username}} <br>
                           DOB : {{$userdetail->dob}} <br>
                           Email : {{$userdetail->email}} <br>
                           Nationality Id : {{$userdetail->nationality_id}} <br>
                           Phone no : {{$userdetail->phone_no}} <br>
                           Mobile no : {{$userdetail->mobile_no}} <br>
                           Country : {{$userdetail->country_id}} <br>
                           Locality : {{$userdetail->locality}} <br>
                           @endforeach


               </div>
</div>
               </div>
           @endsection
