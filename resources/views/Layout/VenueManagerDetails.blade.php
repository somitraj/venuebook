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
                Venue gestion
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <span class="fa fa-user"></span> <a href="/admin/venue">Venue</a> / Card
                </li>
            </ol>
        </div>

    <h2>Details</h2>


                <div class="container">
                    <div class="panel-body">

                        @foreach($venuedetails as $vdata)
                            <img src="/{{$vdata->image}}" width="80" height="80">
                            <div class="table-responsive">
                                <table id="example" class="display table table-responsive table-striped" cellspacing="0" width="100%">

                                    <tr>
                                        <th class="col-md-2">Venue Name</th> <td class="col-md-2"> {{$vdata->first_name}}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-md-2">Email</th> <td class="col-md-2"> {{$vdata->email}}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-md-2">Phone no</th> <td class="col-md-2"> {{$vdata->phone_no}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-2">Phone no 2</th> <td class="col-md-2"> {{$vdata->phone_no_2}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-2">Space Area</th> <td class="col-md-2"> {{$vdata->space_area}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-2">Capacity</th> <td class="col-md-2"> {{$vdata->person_capacity}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-2">Locality</th> <td class="col-md-2"> {{$vdata->locality}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-2">Established Date</th> <td class="col-md-2"> {{$vdata->established_date}}</td>
                                    </tr>


                                    @endforeach
                                </table>
                            </div>
                    </div>



</div>
            </div>

    </div>

@endsection
