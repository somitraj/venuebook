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
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ">
                                    <h6 style="text-align:center">NOTIFICATION</h6></div>



                                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">CLIENT</h6></div>

                                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h6 style="text-align:center">VENUE</h6></div>

                        </a>
                                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 style="text-align:center">SETTINGS</h6></div>

                            <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        </div>
                    </div>
                </div>
                <br>


            @endsection

