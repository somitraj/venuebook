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

<div class="table-responsive">
    <h2>Searh Result :</h2>

        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Image</th>
                <th>Venue name</th>

                {{--
                                        <th>Option</th>
                --}}
            </tr>
            </thead>
            <tbody>
           {{-- @foreach($searchresult as $se)
                <tr>
                    <td><img src="/{{$se->image}}"class="img-circle" width="70" height="70"></td>
                    <td>{{$se->name}}</td>
                </tr>

                @endforeach--}}


            </tbody>

        </table>
</div>
    @endsection
