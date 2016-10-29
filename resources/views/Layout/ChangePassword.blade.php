<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 10/29/2016
 * Time: 8:46 PM
 */
?>
@extends('Layout/MainLayout')
@section('content')
{{--    <div class="container">--}}
{{--  Old Password :  {!! Form::password('old_password', ['class'=>'form-control']) !!}
  New Password : {!! Form::password('password', ['class'=>'form-control']) !!}
  Confirm New Password :{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
  <span class="input-group-btn">
        <button class="btn btn-primary" type="submit"> Change
        </button>
    </span>--}}

      {!! form($form) !!}
{{--    </div>--}}


    @endsection
