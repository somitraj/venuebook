<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 9/21/2016
 * Time: 12:51 PM
 */
$udata=\Venue\userdata::getDetails();

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
                               <span class="fa fa-user"></span> <a href="client">Users</a> / Card
                           </li>
                       </ol>
                   </div>

               <h2 class="fa-pagelines">Details</h2>
               FirstName: {{$udata->first_name}}<br>
               LastName : {{$udata->last_name}} <br>
               Username : {{$udata->username}} <br>
               DOB : {{$udata->dob}} <br>
               Email : {{$udata->email}} <br>
               Nationality Id : {{$udata->nationality_id}} <br>
               Phone no : {{$udata->phone_no}} <br>
               Mobile no : {{$udata->mobile_no}} <br>
               Country : {{$udata->country_id}} <br>
               Locality : {{$udata->locality}} <br>
               Profile Image: {{$udata->profile_image}} <br>


               </div>
</div>
               </div>
           @endsection
