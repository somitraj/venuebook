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

        {{--<div id="toplink">--}}
            <div class="nav nav-tabs">
               <li> <a href="managerlist" role="navigation" class="nav navbar-default ">Manager<span class="badge">{{count($managerlist)}}</span></a></li>


               <li> <a href="venueregister" role="navigation" class="nav navbar-default ">Venue<span class="badge"></span></a></li>


            </div>
{{--</div>--}}

            <div class="table-responsive">
                <a href="venueregister">
                <table class="table table-hover table-bordered">

                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Venue name</th>

                        <th>Email</th>
                        <th>Type name</th>
                       {{-- <th>Option</th>--}}
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

{{--
                            <td><button class="btn-primary">view</button></td>
--}}

                        </tr>
                    @endforeach

                </table>
                </a>
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



