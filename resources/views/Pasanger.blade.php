@extends('layout.layout')  
@section('Navbar')  
@section('Content')
<style>
     .booking{
    padding-left: 120px; 
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    .hh2{
        margin-block-end: 0.0em;
        
    }
    div.sticky{

        position:-webkit-sticky;
        position: sticky;
        top: 0;
        /* background: #ece9eb99; */
        background-color: black;
        color: white;
        /* opacity: %; */
        width:100%;
        /* margin-left: 100px; */
        height: 90px;
    }
    .pad{
        margin-left: 120px; 
        font-family: Arial, Helvetica, sans-serif;
    }
    .a2{
        /* margin-block-start: 0.3em; */
        margin-block-end: 0em;

    }
    .a1{
        /* margin-block-end: 0em; */
        /* margin-block-start: 0.0em; */
    }
    .an{
        color: red;
    }
    .form{
        margin-left:120px;
        width: 80%;
        height: 350px; 
        background-color: snow;
        border: 2px solid black;
    }
    .h3{
        font-family: Arial, Helvetica, sans-serif;
        margin-block-start: 8px; 
        margin-block-end: 8px; 

        margin-left:25px; 
    }
    .name{
        width: 300px;
        margin-left: 40px;
        height: 35px;
        
    }
    .title{
        margin-left: 40px;
        width: 200px;
        height: 35px;
    }
    ::placeholder{
        font-style: italic;
    }
    .mar{
        margin-left: 40px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .btn1{
        margin-left: 43%;
        width: 130px;
        height: 45px;
        /* background-color: rgba(0, 0, 0, 0.895); */
        background-color:rgb(210, 27, 27);
        border: solid white 2px;
        font-weight:bold;
        /* color: #fff; */
        color: white;
        border-radius: 10px;
        font-family: 'Courier New', Courier, monospace;
        font-size: 18px;

    }
    .btn1:hover{
        margin-left: 43%;
        width: 130px;
        height: 45px;
        /* background-color: rgba(0, 0, 128, 0.867); */
        background-color:white; 
        color: red;
        border: solid red 2px;
        border-radius: 10px;
        font-family: 'Courier New', Courier, monospace;
        font-size: 18px;
    }


    </style>

<div class="booking">
    <h1>Make a booking</h1>
    <h2 class="hh2"><font color="red">1</font>&nbsp;<font size="4">Flights</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font color="red">2</font>&nbsp;<font size="4">Passenger</font><font size="4"></font>&emsp;&emsp;&emsp;<font size="4"></font>&emsp;&emsp;&emsp;<font color="red">3</font>&nbsp;<font size="4">Payment</font><font size="4"></font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font color="red">4</font>&nbsp;<font size="4">Confirm    </font></h2>
        <hr color="gray" width="400" align="left" size="5">
        {{-- <hr class="hrdot"> --}}

</div>
<?php 
session_start();
// $login - $_SESSION["login"];
// if($login != "True"){
//     header('location:http://localhost:8000/');
// }
$dep = $_SESSION["Departure"];
$ari = $_SESSION["Arival"];
$stat = $_SESSION['radio'];
$take_of = $_POST['Takeof'];
$land = $_POST['Land'];
$flite_No = $_POST['Flite'];
$price = $_POST['price'];
$_SESSION['price'] = $price;
$_SESSION['TakeOf'] = $take_of;
$_SESSION['Land'] = $land;
$_SESSION['fliteNo'] = $flite_No;

if($stat == 'Return'){
    // session_start();
    $_SESSION['Ret_Tak'] = $_POST['Ret_Tak'];
    $_SESSION['Ret_land'] = $_POST['Ret_land'];

}

// echo $_SESSION['fname'] ;
// echo $price;
// session_start();
// $_SESSION['price'] = $price;
?>
{{$errors}}
{{-- @if($errors->any())
@foreach (@errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif --}}
<div class="sticky">
    <h2 class="pad a2"><i>{{$dep}}</i> <font color="red"><strong>To</strong></font> <i>{{$ari}}</i></h2>
    <h3 class="pad a1">{{$stat}} 1 passenger <a class="an" href="{{url('')}}"><u>Change Search</u></a></h3>
</div>
<br>
<div class="form">
    {{-- <hr width="100%" size="5" color="gray"> --}}
    <h3 class="h3">Passenger details</h3>
    <hr color="black" size="3">
    <h3 style="margin-left: 40px;font-family:arial">Passenger 1 <i>(Adult)</i></h3>
    {{-- {{$errors}} --}}
    <form method="post" action="{{url('Payment')}}">
    {{-- <form method="post" action="Payment"> --}}

        @csrf
        <select class="title" name="title">
            <option value="Mr">Mr</option>
            <option value="Ms">Mrs</option>
            <option value="Mrs">Miss</option>
            <option value="Mr">Ms</option>
        </select><br><br>
        <input class="name"type="text" name="fname" id="fname" placeholder="First Name" required><font size="5"<sup><b>*</b></sup></font>&emsp;<font face="arial"><b>Make Sure the names you enter exactly match your password.</font></b><br><br>
        <input class="name"type="text" name="lname" id="nname" placeholder="Last Name" required><font size="5"<sup><b>*</b></sup></font><br><br>
        <h3 style="margin-left:40px; margin-block-end: 0em;margin-block-start: 0em;font-family:arial;font-size:17px;">Date of birth</h3>
        <input  class ="title"type="date" name="dob" id="" placeholder="Date of Borth" required>
    </div><br>
    <div class="form">
        <h3 class="h3">Contact details</h3>
        <hr color="black" size="3">
        <h4 class="mar" style="margin-block-end: 0px;">Contact number</h4>
        <p class="mar" style="margin-block-start: 3px;">Please enter at least one contact number below.</p>
        <h3 class="mar">Primary Contact Number</h3>
        <input type="tel" class="name" name="mobile" placeholder="Phone Number" required><br>
        <h3 class="mar">Email Address</h3>
        <input type="email" class="name" name="email"placeholder="Email address" required><br>

    </div>
    <button class="btn1" type="submit">Submit</button>

    </form>
{{-- @php print_r($errors->all()) @endphp --}}

@stop