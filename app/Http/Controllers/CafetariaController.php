<?php

namespace App\Http\Controllers;

use App\Models\Cafetaria;
use App\Models\Commend;
use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CafetariaController extends Controller
{
    //
    public function index(Request $request){
        $caf_id =  $request->segment(2);

        $complains = Complain::select('*')->where('cafetaria_id', $caf_id)->get();
        $commendations = Commend::select('*')->where('cafetaria_id', $caf_id)->get();
        echo $complains;
        return view('cafetaria', [
            'caf_id' => $caf_id,
            'complains' => $complains,
            'commendations' => $complains
        ]);
    }

    // method to handle posting commend messages
    public function sendCommendMessage(Request $request){
        $form = $request->validate([
            'message' => 'required',
        ]);

        $form['user_id'] = Auth::user()->id;
        $form['cafetaria_id'] = $request->segment(4);
        
        Commend::create($form);
        return back();
    }


    // method to handle posting complain messages
    public function sendComplainMessage(Request $request){
        $form = $request->validate([
            'message' => 'required',
        ]);

        $form['user_id'] = Auth::user()->id;
        $form['cafetaria_id'] = $request->segment(4);
        
        Complain::create($form);
        return back();
    }
}
