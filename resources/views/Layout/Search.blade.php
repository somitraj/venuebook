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
    {{--{{dd($searchresult->data)}}--}}
    <div class="row" style="border: 1px solid;    padding-top: 20px;  background-color: #F8F6F2;margin-left: 80px;margin-right: 80px;">
        <div class="form-group col-lg-4">
        </div>

        {!! Form::open(['method'=>'GET','url'=>'venuesearch','class'=>'navbar-form navbar-left','role'=>'search'/*,'action'=>'/Search'*/])  !!}

        <div class="input-group custom-search-form ">
            <input type="text" class="form-control" name="search" placeholder="Search more venue">
    <span class="input-group-btn">
        <button class="btn btn-primary" type="submit"> Search
        </button>
    </span>
        </div>
        {!! Form::close() !!}
    </div>
<div class="container">
<div class="table-responsive">
    <h2>Searh Result :</h2>

        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Image</th>
                <th>Details</th>

            </tr>
            </thead>
            <tbody>
            @foreach($searchresult->data as $se)
                <tr>
                    <td><a href="/venuepage?id={{$se->id}}"><img src="/{{$se->image}}"class="img-circle" width="70" height="70"></a></td>
                    <td>Venue Name :{{$se->name}}
                        <br> Locality :{{$se->locality}}
                        <br> Capacity :{{$se->person_capacity}}
                        <br> Space Area :{{$se->space_area}}
                        <br> Phone 1 :{{$se->phone_no}}
                        <br> Phone 2:{{$se->phone_no_2}}
                        <br> Locality :{{$se->locality}}
                    </td>


                </tr>

                @endforeach


            </tbody>

        </table>
</div>
    </div>
    @endsection
