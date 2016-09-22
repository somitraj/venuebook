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
                <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                                <div class="panel-heading">
                                        <p style="text-align:center">Feedback</p>
                                </div>
                                <div class="panel-body">
                                        {!! form($form) !!}
                                </div>
                        </div>
                </div>
        </div>

@endsection
