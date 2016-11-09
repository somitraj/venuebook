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

                   <div id="page-wrapper">

                       <div class="container-fluid">

                       <div class="row">
                   <div class="col-lg-12">
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
                                       <table id="example" class="display table table-responsive table-striped" cellspacing="0" width="100%">

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
