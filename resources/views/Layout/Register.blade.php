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
    <div class="row">
       <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2">
           <div class="panel-primary">
               <div class="panel-heading">
                   <p style="text-align:center">Register</p>

               </div>
               <div class="panel-body">
                   {!! form($form) !!}
               </div>
           </div>
       </div>
    </div>

@endsection
