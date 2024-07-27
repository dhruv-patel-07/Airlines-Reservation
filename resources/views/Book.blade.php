<?php 

$dep = $_POST['Departure'];
$Ari = $_POST['Arival'];
$dep_date = $_POST['dep_date'];
$redio = $_POST['radio'];
$ari_date=$_POST['Ari_date'];

session_start();
$_SESSION['Departure'] = $dep;
$_SESSION['Arival'] = $Ari;
$_SESSION['dep_date'] = $dep_date;
$_SESSION['Ari_date'] = $ari_date;
$_SESSION['radio'] = $redio;
?>

@extends('layout.layout')  
@section('Navbar')  
@section('Content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
<style>
    .show{
        /* margin-block-start: 0.0em; */
        /* margin-bottom: 10px; */
        width: 100%;
        height: 70px;
        background-color:whitesmoke; 
    }
    .Aname{
        margin-block-start: 0.0em;
        font-family: Helvetica, sans-serif;
       padding-top:5px;
       padding-left: 100px; 
       margin-block-end: 0.5em;


    }
    .radio{
        margin-block-start: 0.0em;
        font-family: Helvetica, sans-serif;
       padding-left: 100px; 



    }
    body{
        background-color: white;
    }
    .anchor{
        /* text-decoration: none; */
        color: red;
    }
    .booking{
    padding-left: 100px; 
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    .hh2{
        margin-block-end: 0.0em;
        
    }
    .hrdot{
        border-top: 3px dotted gray;
        float: right;
        width: 85%;
    }
    .alert{
        margin-left: 100px;
        width: 80%;
        height: 120px;
        background-color:whitesmoke; 
        box-shadow: 20px 20px 50px grey;
    }
    .hh4{ 
        color: orange;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;

    }
    .mar{
        margin-left:25px; 
        font-size: 16px;
        /* font-family:  */
    }
    .price{
        width:80%;
        height: 160px;
        /* background-color: rgb(252, 190, 190); */
        background-color: whitesmoke;
        margin-left:100px; 
    }
    .state{
        padding-top: 25px;
        padding-left: 5px;

    }   
    .icon{
        /* padding-top: 20px; */
    }
    .btn1{
        width: 70px;
        height: 35px;
        background-color:#1b3069; 
        color: white;
        border: 1px solid black;
        border-radius:5px; 
        margin-left: 80%;
    }
    .btn1:hover{
        width: 70px;
        height: 35px;
        background-color:white; 
        color:#1b3069;
        border: 2px soid #1b3069;
        border-radius:9px;
        /* margin-left: 200px;  */

    }
    .line{
      width: 80%;
      height: 20px;
      color:black;
      font-family: Arial, Helvetica, sans-serif;
    }
    .btn2{
        width: 70px;
        height: 45px;
        text-decoration: none;
        margin-left:80%;
        background-color: #1b3069; 
        padding: 7px 10px;
        color: white;
        border: 1px solid black;
        border-radius:5px; 
    }
    .btn2:hover{
        background-color:white; 
        color:#1b3069;
        border: 2px soid #1b3069;
        border-radius:9px;
    }
    a{
        /* width: 70px; */
    }
    .return{
        margin-top: 130px;
        margin-left:180px;
    }
    .time{
        /* margin-left:10px;  */
    }
    

</style>
<div class="show">
    <b><p class="Aname"><?php echo $dep." To ".$Ari?></p></b>
    <b><p class="radio"><?php echo $redio." - "."1 passenger - ";?>&nbsp;<u><a class="anchor" href="Back">Change Search</a></u></p></b>
    
</div>
<div class="booking">
    <h1>Make a booking</h1>
    <h2 class="hh2"><font color="red">1</font>&nbsp;<font size="4">Flights</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font color="red">2</font>&nbsp;<font size="4">Passenger</font><font size="4"></font>&emsp;&emsp;&emsp;<font size="4"></font>&emsp;&emsp;&emsp;<font color="red">3</font>&nbsp;<font size="4">Payment</font><font size="4"></font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font color="red">4</font>&nbsp;<font size="4">Confirm    </font></h2>
        <hr color="gray" width="200" align="left" size="5">
        {{-- <hr class="hrdot"> --}}

</div>
<br>
<br>
<br>
<div class="alert">
<center><h4 class="hh4">Lowest price for all passengers</h4></center>
<b class="mar">This price is the lowest available price combination for your selected dates. Look for the lowest price indicator in the results below to get this price.All prices &emsp;&nbsp;&nbsp;below include airfare, taxes, fees and carrier-imposed charges for 1 passenger <font color="blue"><b><i>(1 adult)</font></i></b>.</b>

</div>
<br>
<br>
{{-- <img class="icon" src="icon3.png"> --}}
<div class="line">
    <b><h2 style="margin-left:520px;">{{$dep}} To {{$Ari}}</h2></b>
</div>
<div class="price">
    {{-- <address>         --}}
        <?php $time = rand(1,5);?>
        <?php $min = rand(1,60);
        $price = rand(5000,20000);
        $rand  = rand(1000,9999);
        $TakeOf = rand(1,12);
        $land  = $TakeOf + $time;

        
        $time3 = rand(1,5);
        $min3 = rand(1,60);
        $price3 = rand(5000,20000);
        $rand3  = rand(1000,9999);
        $TakeOf3 = rand(1,12);
        $land3  = $TakeOf3 + $time3;
        ?>


<p class="state"><font size='4' face="Arial" >{{$dep}}</font>&emsp;<font size='4' color="#B20E3D" face="Arial" ><b>{{$time}} hrs {{$min}} mins</b></font>&emsp;<font size='4' face="Arial" >{{$Ari}}</font>&emsp;&emsp; <font color="#004276" face = "arial" size="4"><b>EM{{$rand}}</b></font><font color="black" face="Arial">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><font color="black" face="Verdana" size="4"><b> Economy From </b><font color="#004276">{{$price}} INR</font></b></font>  
<br><font size='5' face="Arial" ><b>&emsp;&nbsp;&nbsp;&nbsp;{{$TakeOf}}:00</b></font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font size='5' face="Arial" ><b>&nbsp;&nbsp;&nbsp;{{$land}}:{{$min}}</b></font>&emsp;&emsp;&emsp;&emsp;<img src="icon4.png">&emsp;&emsp;&emsp;<?php if($redio == 'Return') { ?> <b>Return(Take OFF &nbsp;{{$TakeOf3}}:00 Land &nbsp;{{$land3}}:{{$min3}})</b> <?php }?></p>
<form method="post" action="{{url('Pasanger')}}">
    @csrf
    <button class="btn1" type="submit">Continue</button>
    <input type="hidden" name="Flite" value="EM{{$rand}}">
    <input type="hidden" name="price" value="{{$price}}">
    <input type="hidden" name="Takeof" value="{{$TakeOf}}:00">
    <input type="hidden" name="Land" value="{{$land}}:{{$min}}">

    <?php 
    if($redio == 'Return'){
        ?>
        <input type="hidden" name="Ret_Tak" value="{{$TakeOf3}}:00">
        <input type="hidden" name="Ret_land" value="{{$land3}}:{{$min3}}">
        <?php
        
    }
    ?>
</form>
    {{-- <input type="hidden" name="Ari" value="{{$dep}}">
    <input type="hidden" name="Dep" value="{{$Ari}}">
    <input type="hidden" name="Ari_date" value="{{$ari_date}}">
    <input type="hidden" name="Dep_date" value="{{$dep_date}}">
    <input type="hidden" name="radio" value="{{$redio}}"> --}}

</div>
<div class="price">
    {{-- <address>         --}}
        <?php $time1 = rand(1,5);?>
        <?php $min1 = rand(1,60);
        $price1 = rand(5000,20000);
        $rand1  = rand(1000,9999);
        $TakeOf1 = rand(1,12);
        $land1  = $TakeOf + $time;

        $time11 = rand(1,5);
        $min11 = rand(1,60);
        $price11 = rand(5000,20000);
        $rand11  = rand(1000,9999);
        $TakeOf11 = rand(1,12);
        $land11  = $TakeOf11 + $time11;
        ?>


<p class="state"><font size='4' face="Arial" >{{$dep}}</font>&emsp;<font size='4' color="#B20E3D" face="Arial" ><b>{{$time1}} hrs {{$min1}} mins</b></font>&emsp;<font size='4' face="Arial" >{{$Ari}}</font>&emsp;&emsp; <font color="#004276" face = "arial" size="4"><b>EM{{$rand1}}</b></font><font color="black" face="Arial">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><font color="black" face="Verdana" size="4"><b> Economy From </b><font color="#004276">{{$price1}} INR</font></b></font>  
<br><font size='5' face="Arial" ><b>&emsp;&nbsp;&nbsp;&nbsp;{{$TakeOf1}}:00</b></font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font size='5' face="Arial" ><b>&nbsp;&nbsp;&nbsp;{{$land1}}:{{$min1}}</b></font>&emsp;&emsp;&emsp;&emsp;<img src="icon4.png">&emsp;&emsp;&emsp;<?php if($redio == 'Return') { ?> <b>Return(Take OFF &nbsp;{{$TakeOf11}}:00 Land &nbsp;{{$land11}}:{{$min11}})</b> <?php }?></p>
<form method="post" action="{{url('Pasanger')}}">
    @csrf
    <button class="btn1" type="submit">Continue</button>
    <input type="hidden" name="Flite" value="EM{{$rand1}}">
    <input type="hidden" name="price" value="{{$price1}}">
    <input type="hidden" name="Takeof" value="{{$TakeOf1}}:00">
    <input type="hidden" name="Land" value="{{$land1}}:{{$min1}}">
    <?php 
    if($redio == 'Return'){
        ?>
        {{-- <p class="return"><b>Retrun</p> --}}
        {{-- <p class="time"><font face="arial" size="4" color="red"><b>&emsp;&nbsp;&nbsp;&nbsp;&emsp;{{$TakeOf11}}:00&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{$land11}}:{{$min11}}</p></font> --}}

     {{-- ><font size='5' face="Arial" ><b>&emsp;&nbsp;&nbsp;&nbsp;{{$TakeOf1}}:00</b></font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font size='5' face="Arial" ><b>&nbsp;&nbsp;&nbsp;{{$land1}}:{{$min1}}</b></font>&emsp;&emsp;&emsp;&emsp;<img src="icon4.png">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p> --}}
        <input type="hidden" name="Ret_Tak" value="{{$TakeOf11}}:00">
        <input type="hidden" name="Ret_land" value="{{$land11}}:{{$min11}}">
        {{-- <input type="hidden" name="price" value="{{$}}"> --}}
        <?php
        
    }
    ?>
    
</form>
</div>

<div class="price">
    {{-- <address>         --}}
        <?php $time2 = rand(1,5);?>
        <?php $min2 = rand(1,60);
        $price2 = rand(5000,20000);
        $rand2  = rand(1000,9999);
        $TakeOf2 = rand(1,12);
        $land2  = $TakeOf2 + $time2;

        $time12 = rand(1,5);
        $min12 = rand(1,60);
        $price12 = rand(5000,20000);
        $rand12  = rand(1000,9999);
        $TakeOf12 = rand(1,12);
        $land12  = $TakeOf12 + $time12;
        ?>


<p class="state"><font size='4' face="Arial" >{{$dep}}</font>&emsp;<font size='4' color="#B20E3D" face="Arial" ><b>{{$time2}} hrs {{$min2}} mins</b></font>&emsp;<font size='4' face="Arial" >{{$Ari}}</font>&emsp;&emsp; <font color="#004276" face = "arial" size="4"><b>EM{{$rand2}}</b></font><font color="black" face="Arial">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   <b><font color="black" face="Verdana" size="4"><b> Economy From </b><font color="#004276">{{$price2}} INR</font></b></font>  
<br><font size='5' face="Arial" ><b>&emsp;&nbsp;&nbsp;&nbsp;{{$TakeOf2}}:00</b></font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<font size='5' face="Arial" ><b>&nbsp;&nbsp;&nbsp;{{$land2}}:{{$min2}}</b></font>&emsp;&emsp;&emsp;&emsp;<img src="icon4.png">&emsp;&emsp;&emsp;<?php if($redio == 'Return') { ?> <b>Return(Take OFF &nbsp;{{$TakeOf12}}:00 Land &nbsp;{{$land12}}:{{$min12}})</b> <?php }?></p>
<form method="post" action="{{url('Pasanger')}}">
    @csrf
    <button class="btn1" type="submit">Continue</button>
    <input type="hidden" name="Flite" value="EM{{$rand2}}">
    <input type="hidden" name="price" value="{{$price2}}">
    <input type="hidden" name="Takeof" value="{{$TakeOf2}}:00">
    <input type="hidden" name="Land" value="{{$land2}}:{{$min2}}">
    <?php 
    if($redio == 'Return'){
        ?>
        <input type="hidden" name="Ret_Tak" value="{{$TakeOf12}}:00">
        <input type="hidden" name="Ret_land" value="{{$land12}}:{{$min12}}">
        <?php
        
    }
    ?>
    
</form>
</div>

<?php 
// if(isset($GET['btn3']))
// return redirect('Book')
?>
@stop