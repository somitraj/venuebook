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
   {{-- @foreach($book as $b)
        {{$b->date}}
        {{$b->time}}
        {{$b->nop}}
        {{$b->event}}



    @endforeach--}}
   <div class=""
    @foreach($menu as $m)
        {{$m['item_name']}}
        {{$m['quantity']}}
        {{$m['total']}}
        {{$m['grand_total']}}

    @endforeach

    @endsection