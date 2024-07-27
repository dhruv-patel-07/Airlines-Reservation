<?php

namespace App\Http\Controllers;
use DB;
use PDF;
use Illuminate\Http\Request;
// use App\User;

class PDFcontroller extends Controller
{
    //
    public function genratepdf($id){
       $data1 = DB::table('flights')->where('id','=',$id)->get();
        // $id = json_decode($data1);
        $data = json_decode($data1);

        // $pdf = PDF::loadView('ticket',compact('id'))->setPaper('a4','landscape');
        // return $pdf->download('MyTicket.pdf');
        return view('ticket',['id'=>$data]);
    }
}
