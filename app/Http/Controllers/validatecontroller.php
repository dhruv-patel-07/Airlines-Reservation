<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\C
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class validatecontroller extends Controller
{
    //
 function validateForm(Request $req){
    $req->validate([
        'fname'=>'required',
        'lname'=>'required',
        'mobile'=>'required'

    ]);
    return response()->json(["message"=>"hello"]);
 }
}
