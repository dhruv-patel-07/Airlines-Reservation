<html>
    <head>
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    </head>
    <style>
        .box{
            margin-top: 70px;
            margin-left: 190px;
            width: 900px;
            height: 400px;
            background-color: whitesmoke;
            /* display: flex; */
            border-radius:12px 12px 0px 0px; 
        }
        .strip{
            float: left;
            width: 25%;
            height: 50px;
            /* background-color: rgba(255, 250, 250, 0.89); */
            background-color: rgb(210, 35, 35);
            border-radius:10px 0px 0px 0px; 
            
        }
        .strip1{
            /* float: right; */
            display: inline-block;
            width: 75%;
            height: 50px;
            background-color: rgba(0, 0, 0, 0.84);
            border-radius: 0px 10px 0px 0px;
        }
        .hh3{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: white;
            margin-left: 20px;
        }
        .h3{
            color: white;
            margin-left: 20px;
            margin-top: 12px;
            font-family:  'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .part1{
            background-color: whitesmoke;
            width: 60%;
            float: left;
            height: 100%;
            /* display: inline;  */
        }
        .part2{
            background-color: whitesmoke;
            display: inline-block;
            width: 40%;
            height: 100%;
            /* border: 2px solid gray; */
            
        }
        .h4{
            color: rgb(87, 84, 84);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-left: 30px;
            /* margin-block-end: 5px; */
            font-size: 16px;
        }
        .h2{
            margin-block-start: 0em;
            margin-left: 30px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .h21{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-left: 30px;
            font-size: 19px;
            margin-block-start: 9px;
        }
        .one{
            margin-top 5px;
        }
        .sec{
            width:99%;
            height:99%;
            background-color:whitesmoke;
            border:2px solid gray;
        }
        .two{
            
        }
        .hhh2{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
            margin-block-start: 4px;
        }
        /* <?php ?> */
    </style>
<body>
     <div class="box">
        <div class="strip"><h3 class="hh3">Emirates</h3></div>
        <div class="strip1"><h3 class="h3">Economic class</h3></div><br>
       {{-- <h3>Name</h3> --}}
       {{-- {{$id}} --}}
       @foreach($id as $id)
       <div class="part1"><h4 class="h4">Name</h4> 
        <h2 class="h2">{{$id->fname}} {{$id->lname}}</h2>
        <h4 class="h4">Flight&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;Time&emsp;&emsp;&emsp;&nbsp;&emsp;Date of Depature</h4>
        <h3 class="h21">{{$id->flights_No}}&emsp;&emsp;&nbsp;{{$id->Takeoff_Time}}&nbsp;&nbsp;&emsp;&emsp;&emsp;{{$id->Departure_date}}</h2>
        <h4 class="h4">Gate&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;Zone&emsp;&emsp;&emsp;&nbsp;From To</font></h4>
        <h3 class="h21">A18&emsp;&emsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;D&emsp;&emsp;&emsp;&nbsp;{{$id->Departure}}&nbsp;&nbsp;<span class="iconify one" data-icon="el:plane" style="color: red;" data-width="25" data-height="25"></span>&nbsp;&nbsp;{{$id->Arrival}}</h2><br> 
        <?php
            if($id->Ret_Takeoff_Time != NULL){
                ?>
                <h4 class="h4">Flight&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;Time&emsp;&emsp;&emsp;&nbsp;&emsp;Date of Depature&emsp;</h4>
                <h3 class="h21">{{$id->flights_No}}&emsp;&emsp;&nbsp;{{$id->Ret_Takeoff_Time}}&emsp;&emsp;&emsp;{{$id->Return_date}}&emsp;&emsp;</h2><br>        
                <?php
            }
            ?>

       </div> 
       <div class="part2">
        <div class="sec">
            <span class="iconify two" data-icon="ic:sharp-barcode" data-width="350" data-height="100"></span> 
            <h2 class="hhh2">{{$id->flights_No}}</h2>

            <h4 class="h4">Seat&emsp;&emsp;&emsp;&emsp;&emsp;window</h4>
            <h3 class="h21">B<?php echo rand(1,100)?>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="iconify" data-icon="ic:baseline-airline-seat-legroom-normal" data-width="30" data-height="30"></span></h3> 

            <h4 class="h4">Luggage Code</h4> 
            <h3 class="h21">B<?php echo rand(1000,3000)?></h3>

        </div>
       </div> 
       @endforeach

    </div>
</body>









