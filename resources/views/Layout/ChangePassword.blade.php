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
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div> <!-- end .flash-message -->
<div class="panel-footer">
      {!! form($form) !!}
    </div>


    @endsection
