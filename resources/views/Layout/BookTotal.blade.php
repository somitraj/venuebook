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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-primary">
                <div class="panel-heading">
                    <h4 style="text-align:center">Charges</h4>
                </div>
                <div class="panel-body">
                    {!! form($form) !!}
                    {!! form_end($form) !!}
                    <br>
                  <a href="/BookPreview">  <button type="button" class="btn btn-primary btn-block">Preview Your Booking</button></a>

                </div>
            </div>
        </div>
    </div>

@endsection
