<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\flights;
class HomeControoller extends Controller
{
    //
    public function index($val){
        // return 'hi From Controller';
        echo "$val";
    }
    public function val(Request $request){
        // return 'hi From Controller';
        $request->validate(
            [
                 'fname'=> 'required',
                 'email'=>'required|email',
                 'lname'=> 'required',
                 'mobile'=>'required'
            ]
            );
}
public function data(){
        return flights::find(52);
}
}
