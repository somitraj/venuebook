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

    <div>
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
    @yield('manager-content')
@endsection
