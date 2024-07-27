@extends('layout.layout')  
@section('Navbar')  
@section('Content')
<style>
     .booking{
    padding-left: 120px; 
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    .h2{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: green;
        font-size: 45px;
    }
    .btn1{
        width: 20%;
        height: 45px;
        margin-top: 50px;
        margin-left: 500px;
        /* margin-left: 20px; */
        background-color: white;
        border-radius: 7px;
        color: green;
        border:2px solid green;
    }
    .btn1:hover{
        /* width: 90%; */
        height: 45px;
        margin-top: 50px;
        background-color: green;
        border-radius: 7px;
        color:white;
        border:2px solid white;
    }
</style>
<div class="booking">
    <h1>Make a booking</h1>
    <h2 class="hh2"><font color="red">1</font>&nbsp;<font size="4">Flights</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font color="red">2</font>&nbsp;<font size="4">Passenger</font><font size="4"></font>&emsp;&emsp;&emsp;<font size="4"></font>&emsp;&emsp;&emsp;<font color="red">3</font>&nbsp;<font size="4">Payment</font><font size="4"></font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font color="red">4</font>&nbsp;<font size="4">Confirm    </font></h2>
        <hr color="gray" width="900" align="left" size="5">
        {{-- <hr class="hrdot"> --}}
</div>
<center><h2 class="h2">Congratulations! Your Flight Booking is Confirmd.</h2></center>
<form action="{{url('ticket')}}\{{$DataID}}" method="post">
   @csrf 
<button class="btn1">Get My ticket</button>
@stop
<?php
@session_start();
$_SESSION['id'] = $DataID

?>