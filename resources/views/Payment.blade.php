@extends('layout.layout')  
@section('Navbar')  
@section('Content')

<?php
// {{Auth::user()->email()}}
// echo $fname = $_POST['fname'];
// $lname = $_POST['lname'];
session_start();
// $price = $_SESSION['price'];
// $_SESSION[];
// echo $_SESSION['radio'];
$price = $_SESSION['price'];
// echo $fname;
// if(empty($_POST['fname']) && empty($_POST['lname'])){
    // echo "Not set";
    // ?>
    {{-- <script> alert("Enter A Empty Field"); </script> --}}
    {{-- --}}

    
<style>
    .box{
        
        margin-left: 25%;
        width:50%;
        height:375px;
        border:2px solid gray;
        margin-top: 50px;
    }
    .box1{
        width: 100%;
        height: 40px;
        /* background-color: rgba(128, 128, 128, 0.436); */
        background-color: white;
        border-bottom-style:solid;
        color: gray;
        margin: 0px; 
    }
    .det{
        margin-block-start: 0px;
        color: black;
        padding-top: 10px;
        padding-left: 5px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;
    }
    .iconify{
        float: right;
        margin-right: 15px;
        padding-bottom: 20px;
        /* padding-bottom:30px;  */
    }
    .set{
        margin-top: -5px;
    }
    .field{
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin-left: 20px;
        margin-block-end: 0px;
    }
    .input{
        width: 400px;
        height: 35px;
        margin-left: 20px;
    }
    .field2{
        width: 100px;
        height: 35px;
        margin-left: 20px;
    }
    .btn1{
        width: 90%;
        height: 45px;
        margin-top: 50px;
        margin-left: 30px;
        background-color: white;
        border-radius: 7px;
        color: blue;
        border:2px solid blue;
    }
    .btn1:hover{
        width: 90%;
        height: 45px;
        margin-top: 50px;
        background-color: rgb(30, 30, 141);
        border-radius: 7px;
        color:white;
        border:2px solid white;
    }
    .booking{
    padding-left: 120px; 
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
</style>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

{{Auth::user()->email}}
{{-- $name = $_POST['fname'] ?> --}}
{{-- {{Auth::user()->email}}
{{auth()->user()->name}} --}}
{{-- {{auth()->user()->date(d-)}} --}}


{{-- {{Auth::user()->id}} --}}

{{-- {{Auth::user()->columnname}} --}}


<div class="booking">
    <h1>Make a booking</h1>
    <h2 class="hh2"><font color="red">1</font>&nbsp;<font size="4">Flights</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font color="red">2</font>&nbsp;<font size="4">Passenger</font><font size="4"></font>&emsp;&emsp;&emsp;<font size="4"></font>&emsp;&emsp;&emsp;<font color="red">3</font>&nbsp;<font size="4">Payment</font><font size="4"></font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font color="red">4</font>&nbsp;<font size="4">Confirm    </font></h2>
        <hr color="gray" width="650" align="left" size="5">
        {{-- <hr class="hrdot"> --}}

</div>
<div class="box">
    <div class="box1">
        <h3 class="det"><i>Payment Details</i><span class="iconify set" data-icon="logos:visaelectron" data-width="40" data-height="40"></span>&emsp;<span class="iconify set" data-icon="logos:paypal" data-width="30" data-height="30"></span><span class="iconify set" data-icon="logos:mastercard" data-width="35" data-height="35"></span><span class="iconify set" data-icon="logos:discover" data-width="45" data-height="45"></span>
    </div>
    <form action="{{url('Confirm')}}" method="post">
        @csrf 
{{-- <hr color="gray" size="3" width="100%"> --}}
<h4 class="field">Name on Card</h4>
<input class="input" type="text" name="CardName" id="" placeholder="Name on card">

<h4 class="field">Card Number</h4>
<input class="input" type="text" name="CardNum" id="" placeholder="Card Number">

<h4 class="field">CVC &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Expiration Month&emsp;&emsp;Expiration Year</h4>
<input type="text" name="cvc" class="field2" id="" placeholder="ex.777">&emsp;<input type="text" name="emonth" class="field2" id="" placeholder="MM">&emsp;&nbsp;&emsp;&emsp;<input type="text" name="eyear" class="field2" id="" placeholder="YYYY">

<input type="hidden" name="fname" value="{{$_POST['title']." ".$_POST['fname']}}">
<input type="hidden" name="lname" value="{{$_POST['lname']}}">
<input type="hidden" name="Departure" value="{{$_SESSION["Departure"]}}">
<input type="hidden" name="Arrival" value="{{$_SESSION["Arival"]}}">
<input type="hidden" name="Takeoff_Time" value="{{$_SESSION['TakeOf']}}">
<input type="hidden" name="Arival_Time" value="{{$_SESSION['Land']}}">
<input type="hidden" name="Departure_date" value="{{$_SESSION['dep_date']}}">
<input type="hidden" name="email" value="{{$_POST['email']}}">
<input type="hidden" name="Contact" value="{{$_POST['mobile']}}">
<input type="hidden" name="DOB" value="{{$_POST['dob']}}">
<input type="hidden" name="price" value="{{$_SESSION['price']}}">
<input type="hidden" name="flights_No" value="{{$_SESSION['fliteNo']}}">
<input type="hidden" name="Return_date" value="{{$_SESSION["Ari_date"]}}">
{{-- <input type="hidden" name="Return_date" value="{{$_SESSION["Arival"]}}"> --}}
<input type="hidden" name="User_Email" value="{{Auth::user()->email}}">
<input type="hidden" name="User_name" value="{{Auth::user()->name}}"


@php

if($_SESSION['radio'] == 'Return')
{
    @endphp

// <input type="hidden" name="Ret_Takeoff_Time" value="{{$_SESSION['Ret_Tak']}}">
<input type="Hidden" name="Ret_land_Time" value="{{ $_SESSION['Ret_land']}}">
<input type="hidden" name="Ret_Takeoff_Time" value="{{$_SESSION['Ret_Tak']}}">

    @php
}

@endphp
<center><button class="btn1" type="submit">Pay Now</button></center>

</form>
</div>
@stop