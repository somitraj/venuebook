<?php
?>
@extends('Layout/MainLayout')
@section('content')
    <div class="container">
<div class="table-responsive">
    <h4>My Account</h4>
    <br>
    @foreach($account as $ac1)
    <img src="/{{$ac1->profile_image}}" width="100" height="100">
    @endforeach
    <br>
    <br>
    @foreach($account as $ac)
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Firstname</th>
                <td>{{$ac->first_name}}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{$ac->last_name}}</td>

            </tr>


            </thead>


      {{--      @foreach($account as $ac)--}}
                <tr>
                    <th>Username</th>
                    <td>{{$ac->username}}</td>
                    </tr>
            <tr>
                    <th>Email</th>
                    <td>{{$ac->email}}</td>
                </tr>
            @endforeach

        </table>
</div>
    </div>
    @endsection