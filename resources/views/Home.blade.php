@extends('layout.layout')  
@section('Navbar')  
@section('Content')

<style>
    body{
        /* background-color:#edf4fe; */
        background-color: white;
    }
    .main{
        margin: 0%;
        width: 100%;
        height:500px;
        /* background-image:url("air5.jpg"); */
        background-image:url("air2.jpg");
        /* opacity: 80%; */
        background-size: 1550px 700px;
        /* background-color: yellow; */
        position: relative;
    }
    .box{
        /* background-color: #E2B; */
        width: 620px;
        height: 400px;
        /* opacity: 70%; */
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 30px;
        /* position: ; */
        float: left; 
    }

    .box1{
        /* background-color: #F6EFE8; */
        background-color: white;
        /* background-color: rgb(0, 245, 250); */
        width: 600px;
        /* height: 400px; */
        height: 475px;
        /* opacity: 40%; */
        bottom: -240px;
        left: 450px;
        position: absolute;
        box-shadow: 10px 8px 5px  gray; 
        /* box-shadow: 20px 20px 50px 10px rgba(128, 128, 128, 0.551) inset; */
        /* box-shadow: 20px 20px 50px 10px black; */
        /* float: right;  */
    }
    @keyframes colorchange {
  from {color: black;}
  to {color: #1b3069;}
}
    .f1{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
        font-weight: bolder;
        font-size: 40px;
        margin: 0;
        padding: 0;
        color: white;
    }
    .f2{
        margin-block-start: 0.40em;
        /* font-family: Georgia, 'Times New Roman', Times, serif; */
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
        font-size: 50px;
        color: white;
    }
    .f3{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
        font-weight: bolder;
        color: white;
        font-size: 35px;
        margin: 0;
        padding: 0;
        /* margin-block-start: 0; */
    }
    .f4{
        /* font-family: Arial, Helvetica, sans-serif; */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-right: 20px;
        font-size: 40px;
        margin-block-end: 0px;
        margin-block-start:0px;
        animation: colorchange infinite;
        animation-duration: 5s;

    }
    .i1{
        /* margin-top: px; */
    }
    .a1{

         /* width: 70px;
        height: 50px;   */
        /* background-color: aquamarine; */
    }
    li{
        /* background-color: saddlebrown; */
        /* width: 150px;
        height: 50px;; */
      
    }
    .box1_box{
        margin: 0;
        padding: 0;
        width: 600px;
        height: 300px;
        /* display: flex; */
        /* background-color:    bisque; */
    }
    .select1{
        width: 170px;
        height: 40px;
        margin-left: 40px;
        background-color: snow;
        font-family: Arial, Helvetica, sans-serif;
            }
            .select1:hover{
        width: 170px;
        height: 40px;
        margin-left: 40px;
        background-color: black;
        color: #FFF;
        font-family: Arial, Helvetica, sans-serif;
            }
    .select2{
        width: 170px;
        height: 40px;
        margin-right: 110px;
        margin-bottom: 10px;
        float:right;
        background-color: snow;
        font-family: Arial, Helvetica, sans-serif;
    }
    .select2:hover{
        width: 170px;
        height: 40px;
        margin-right: 110px;
        float:right;
        background-color:black;
        color: #FFF;
        font-family: Arial, Helvetica, sans-serif;
    }
    .right{
        float: right;
        /* width: 50%; */
    }
    .set{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
        
    }
    .redio{
       
    }
    .dep{
        margin-left: 40px;
        margin-top: 20px;
        width: 170px;
        height: 40px;
        


    }
    .radio1{
        /* float:right; */
        margin-left: 160px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 17px;
        color: #1b3069;
        /* float: right;
        margin-right: 20px; */
    }
    .select{
        /* color: #fff; */
    }
    .btn1{
        margin-left: 38%;
        width: 130px;
        height: 45px;
        /* background-color: rgba(0, 0, 0, 0.895); */
        background-color:white;
        border: solid black 2px;
        font-weight:bold;
        /* color: #fff; */
        color: #333;
        border-radius: 10px;
        font-family: 'Courier New', Courier, monospace;
        font-size: 18px;

    }
    .btn1:hover{
        margin-left: 38%;
        width: 130px;
        height: 45px;
        /* background-color: rgba(0, 0, 128, 0.867); */
        background-color:#1b3069; 
        color: white;
        border-radius: 10px;
        font-family: 'Courier New', Courier, monospace;
        /* font-family: v */
        font-size: 18px;
    }
    .footer{
        width: 100%;
        height:30px;
        background-color: #333;
        margin-top: 430px;
        color: #fff;
    }
    
    .in_footer{
        width: 100%;
        height: 50px;
        background-color: black;
        font-family:Arial, Helvetica, sans-serif;
        /* margin-left: 10%; */
        color: #fff;
    }
    .margin_in_footer{
        margin-left: 35%;
        padding-top: 10px; 
        /* margin-block-start: 10px; */
    }
    .check{
        margin-left: 40px;
        margin-top: 40px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .type{
        /* margin-left: 400px; */
        /* margin-top: 100px; */
    }
    .hh1{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        /* margin-top: 20px; */
        margin-block-start: 10px;
        /* margin-block-end: 0px; */
    }
</style>
{{-- <img src="{{asset('air(2).jpg')}}" alt="Image 1"> --}}
<div class="main">
    <br>
    <div class="box">
        <br>        
            <h2 class="f1">You get</h2>
            <h1 class="f2"><b>&emsp;&emsp;SO MUCH MORE</b></h1>
            <h2 class="f3">&emsp;&emsp;&emsp;&emsp;&emsp;in Emirates Economy</h2>
    </div> 

    {{-- Box End --}}

</div>
<form method="post" name="form-post" action="{{url('Book')}}">
    @csrf
<div class="box1">
{{-- <h3 class="f4">Search Flights</h3> --}}
{{-- <img src="plane.png" alt="icon"><a class="a1" href="#"> --}}
<center><ul><li><h3 class="f4">Search Flights</a></h3></li></ul></center>
<hr style="height: 3px;background-color:gray">
    {{-- <hr style="height:5px;border-width:0;color:gray;background-color:gray"> --}}
    <div class="box1_box">
   <i>     <h3 class="set"style="margin-block-end: 0.40em;width=50px;margin-left:40px;color:#1b3069;"><b>Departure airpot&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Arrival airpot<b></h3></i>   
        <select class="select1" name="Departure">
            <?php
            $arr= [ "Andhra Pradesh",
                            "Arunachal Pradesh",
                            "Assam",
                            "Bihar",
                            "Chhattisgarh",
                            "Goa",
                            "Gujarat",
                            "Haryana",
                            "Himachal Pradesh",
                            "Jammu and Kashmir",
                            "Jharkhand",
                            "Karnataka",
                            "Kerala",
                            "Madhya Pradesh",
                            "Maharashtra",
                            "Manipur",
                            "Meghalaya",
                            "Mizoram",
                            "Nagaland",
                            "Odisha",
                            "Punjab",
                            "Rajasthan",
                            "Sikkim",
                            "Tamil Nadu",
                            "Telangana",
                            "Tripura",
                            "Uttarakhand",
                            "Uttar Pradesh",
                            "West Bengal",
                            "Andaman and Nicobar Islands",
                            "Chandigarh",
                            "Dadra and Nagar Haveli",
                            "Daman and Diu",
                            "Delhi",
                            "Lakshadweep",
                            "Puducherry"];
            foreach ($arr as $i) {
                ?>
                <option value="{{$i}}"> {{$i}} </option>
                
            <?php   
            }
            session_start();
            $_SESSION['login']="True";
            ?>
 </select>
            
            {{-- Second --}}
            {{-- <h3 class="right"><b>Departure airpot<b></h3> --}}
                <select class="select2" name="Arival">
                    <?php
                    $arr= [ "Andhra Pradesh",
                                    "Arunachal Pradesh",
                                    "Assam",
                                    "Bihar",
                                    "Chhattisgarh",
                                    "Goa",
                                    "Gujarat",
                                    "Haryana",
                                    "Himachal Pradesh",
                                    "Jammu and Kashmir",
                                    "Jharkhand",
                                    "Karnataka",
                                    "Kerala",
                                    "Madhya Pradesh",
                                    "Maharashtra",
                                    "Manipur",
                                    "Meghalaya",
                                    "Mizoram",
                                    "Nagaland",
                                    "Odisha",
                                    "Punjab",
                                    "Rajasthan",
                                    "Sikkim",
                                    "Tamil Nadu",
                                    "Telangana",
                                    "Tripura",
                                    "Uttarakhand",
                                    "Uttar Pradesh",
                                    "West Bengal",
                                    "Andaman and Nicobar Islands",
                                    "Chandigarh",
                                    "Dadra and Nagar Haveli",
                                    "Daman and Diu",
                                    "Delhi",
                                    "Lakshadweep",
                                    "Puducherry"];
                    foreach ($arr as $i) {
                        ?>
                        <option value="{{$i}}"> {{$i}} </option>
                        
                    <?php   
                    }
                    ?>
                  
                    {{-- <h2 style="margin-top: 30px;">Departure Date</h2> --}}
                    <input class="dep"type="date" name="dep_date">
                    <h2 style="margin-left: 40px;,width=50px;margin-block-start: 0.0em;margin-block-end: 0.0em;font-size:15px;color:#1b3069;">Departure Date</h2>
                    <input class="dep"type="date" name="Ari_date">
                    <h2 style="margin-left: 40px;,width=50px;margin-block-start: 0.0em;font-size:15px;color:#1b3069;">Return Date</h2>
                        <hr style="height: 3px;background-color:darkgray">
                 <h2 class="radio1">&emsp;<b>ONE-WAY</b><input class="radio" type="radio" class="redio" name="radio" value="oneway"><b>&emsp;RETURN-TRIP</b><input type="radio" name="radio" value="Return"> <h2>
                        <hr style="height: 3px;background-color:darkgray">
                        <button class="btn1" type="submit">Continue</button>
                        
            
           
    </div>
</div>
</form>
<div class="check">
    {{-- <h1 class="c1">Book a flight</h1> --}} 
    {{-- {{-- <h3 class="c1">Search for Emirates flights and book online.<br> See our routes and schedules, <br>and discover more about the experience you can look forward to on board.</h3> --}}
</div>
<div class="footer">
    <div class="in_footer"><h3 class="margin_in_footer hh1"><font face="arial">© 2022 The Emirates Group. All Rights Reserved.</font> </h3></div>
    {{-- <h1 class="margin_in_footer"></h1> --}}
    {{-- <p class="margin_in_footer"><a href="#">About us</a></p> --}}
    
</div>
@stop