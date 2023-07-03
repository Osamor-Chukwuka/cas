<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CafetariaController extends Controller
{
    //
    public function index(){
        return view('cafetaria');
    }

    // method to handle posting messages
    public function sendMessage(Request $request){
        $form = $request->validate([
            'user_id' => 'required',
            'cafetaria_id' => 'required',
            'message' => 'required',
        ]);

        $form['user_id'] = Auth::user()->id;
        echo $request->message;
    }
}
