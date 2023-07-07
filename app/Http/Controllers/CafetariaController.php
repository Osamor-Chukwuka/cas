<?php

namespace App\Http\Controllers;

use App\Models\Cafetaria;
use App\Models\Commend;
use App\Models\Commendreply;
use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CafetariaController extends Controller
{
    //
    public function index(Request $request){
        $caf_id =  $request->segment(2);
        $caf_name = Cafetaria::select('*')->where('id', $caf_id)->get();

        $complains = Complain::select('*')->where('cafetaria_id', $caf_id)->get();
        $commendations = Commend::select('*')->where('cafetaria_id', $caf_id)->get();
        // echo ;
        return view('cafetaria', [
            'caf_id' => $caf_id,
            'complains' => $complains,
            'commendations' => $commendations,
            'caf_name' => $caf_name
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


    // method to handle commend replies
    public function commendReply(Request $request){
        $form = $request->validate([
            'reply' => 'required',
        ]);

        $form['message_id'] = $request->segment(2);

        Commendreply::create($form);
        return back();
    }


    // method to handle complain replies
    public function complainReply(Request $request){
        $form = $request->validate([
            'reply' => 'required',
        ]);

        $form['message_id'] = $request->segment(2);

        Commendreply::create($form);
        return back();
    }
}
