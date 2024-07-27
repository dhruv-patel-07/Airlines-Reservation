<?php

namespace App\Http\Controllers;
use App\Models\flights;
use Illuminate\Http\Request;

class Savedata extends Controller
{
    //
    function addData(Request $re){
        $flights = new flights;
        $flights->fname=$re->fname;
        $flights->lname=$re->lname;
        $flights->Departure=$re->Departure;
        $flights->Arrival=$re->Arrival;
        $flights->Takeoff_Time=$re->Takeoff_Time;
        $flights->Arival_Time=$re->Arival_Time;
        $flights->Departure_date=$re->Departure_date;
        $flights->email=$re->email;
        $flights->Contact=$re->Contact;
        $flights->DOB=$re->DOB;
        $flights->price=$re->price;
        $flights->flights_No=$re->flights_No;
        $flights->Return_date=$re->Return_date;
        $flights->User_Email=$re->User_Email;
        $flights->User_name=$re->User_name;
        $flights->Ret_Takeoff_Time=$re->Ret_Takeoff_Time;
        $flights->Ret_land_Time=$re->Ret_land_Time;

        $flights->save();
        $id = $flights->id;
        return view('Confirm',['DataID'=>$id]);
    }
}
