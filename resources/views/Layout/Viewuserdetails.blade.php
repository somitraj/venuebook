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
                {{--   <div>
                       @if(Auth::check())
                           <div>
                               <img src="/{{$pro1}}"class="img-circle" width="70" height="70">
                           </div>
                           <h5>
                               <div>
                                   {{Auth::user()->username}}
                               </div>
                           </h5>
                       @endif
                   </div>--}}
                   <div id="page-wrapper">

                       <div class="container-fluid">

                       <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">
                           Users gestion
                       </h1>
                       <ol class="breadcrumb">
                           <li class="active">
                               <span class="glyphicon glyphicon-backward"></span> <a href="javascript:history.back()">Go Back</a>
                           </li>
                       </ol>
                   </div>

               <h2>Details</h2>
                           <div class="container">
                               <div class="panel-body">

                           @foreach($userdetails as $userdetail)
                                       <img src="/{{$userdetail->profile_image}}" width="80" height="80">
                                   <div class="table-responsive">
                               <table class="table-bordered table table-hover ">

                                   <tr>
                                   <th class="col-md-2">First Name</th> <td class="col-md-2"> {{$userdetail->first_name}}</td>
                                   </tr>
                                   <tr>
                                       <th class="col-md-2">Last Name</th> <td class="col-md-2"> {{$userdetail->last_name}}</td>
                                   </tr>
                                   <tr>
                                       <th class="col-md-2">DOB</th> <td class="col-md-2"> {{$userdetail->dob}}</td>
                                   </tr>
                                   <tr>
                                       <th class="col-md-2">Email</th> <td class="col-md-2"> {{$userdetail->email}}</td>
                                   </tr>
                                   <tr>
                                       <th class="col-md-2">Nationality ID</th> <td class="col-md-2"> {{$userdetail->nationality_id}}</td>
                                   </tr>
                                   <tr>
                                       <th class="col-md-2">Phone no</th> <td class="col-md-2"> {{$userdetail->phone_no}}</td>
                                   </tr>
                                   <tr>
                                       <th class="col-md-2">Mobile no</th> <td class="col-md-2"> {{$userdetail->mobile_no}}</td>
                                   </tr>
                                   <tr>
                                       <th class="col-md-2">Country</th> <td class="col-md-2"> {{$userdetail->country_id}}</td>
                                   </tr>
                                   <tr>
                                       <th class="col-md-2">Locality</th> <td class="col-md-2"> {{$userdetail->locality}}</td>
                                   </tr>


                           @endforeach
                               </table>
                                       </div>
                               </div>
                               </div>


               </div>
</div>
               </div>
           @endsection
