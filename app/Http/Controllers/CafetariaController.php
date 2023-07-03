<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafetariaController extends Controller
{
    //
    public function index(){
        return view('cafetaria');
    }

    // method to handle posting messages
    public function sendMessage(Request $request){
        echo $request->message;
    }
}
