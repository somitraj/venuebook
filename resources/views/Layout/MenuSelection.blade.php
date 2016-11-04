<?php


/*
foreach ($menudata as $md1) {


$q=$_POST['quantity'];
$p=$md1->price_per;



$total=$q*$p;
    }*/

?>



@extends('Layout/MainLayout')

@section('content')


            {!! Form::open(['method'=>'GET'])  !!}

            <div class="container">
                <table class="table-responsive ">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Price per</th>
                        <th></th>
                        <th></th>
                        <th>Total</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menudata as $md)
                <tr>
                 <td>  <input type="checkbox"   name="menuselect[]" value="{{$md->menu_item_id}}"></td>
                 <td>{{$md->item_name}} </td>
                 <td><input class="form-control"  type="number"  name="quantity[]" ></td>
                    <td></td>
                    <td>  X  </td>
                    <td></td>
                    <td>{{$md->price_per}}</td>
                    <td></td>
                  <td> = </td>
                        {{--$total={{$md->price_per}}--}}
                    <td><input  class="form-control" type="number"  name="total[]" disabled></td>

                </tr>

                @endforeach

                     <tr>  <td> <input type="submit" class="btn btn-primary btn-block" value="Next"> </td></tr>
                    </tbody>
                </table>

            </div>

            {!! Form::close() !!}
    </div>
    @endsection

