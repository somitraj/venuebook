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
    <div class="row" style="padding-top: 50px">
       <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2">
           <div class="panel panel-primary">
               <div class="panel-heading">
                   <h4 style="text-align:center">Register</h4>
               </div>
               <div class="flash-message">
                   @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                       @if(Session::has('alert-' . $msg))

                           <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                       @endif
                   @endforeach
               </div> <!-- end .flash-message -->
               <div class="panel-body">
                   {!! form($form) !!}
               </div>
           </div>
       </div>
    </div>

@endsection
