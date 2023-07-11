<?php

namespace App\Http\Controllers;

use App\Models\Cafetaria;
use App\Models\Commend;
use App\Models\Commendreply;
use App\Models\Complain;
use App\Models\Complainreply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CafetariaController extends Controller
{
    //
    public function index(Request $request)
    {
        $caf_id =  $request->segment(2);
        $caf_name = Cafetaria::select('*')->where('id', $caf_id)->get();

        // Get complains and commendations
        $complains = Complain::select('*')->where('cafetaria_id', $caf_id)->get();
        $commendations = Commend::select('*')->where('cafetaria_id', $caf_id)->get();

        // Get replies for complains and commendations
        $complains_replies = Complainreply::select('*')->get();
        $commendations_replies = Commendreply::select('*')->get();
        // echo ;
        return view('cafetaria', [
            'caf_id' => $caf_id,
            'complains' => $complains,
            'commendations' => $commendations,
            'caf_name' => $caf_name,
            'complains_replies' => $complains_replies,
            'commendations_replies' => $commendations_replies
        ]);
    }

    // method to handle posting commend messages
    public function sendCommendMessage(Request $request)
    {
        $form = $request->validate([
            'message' => 'required',
        ]);

        $form['user_id'] = Auth::user()->id;
        $form['cafetaria_id'] = $request->segment(4);

        Commend::create($form);
        return back();
    }


    // method to handle posting complain messages
    public function sendComplainMessage(Request $request)
    {
        $form = $request->validate([
            'message' => 'required',
        ]);

        $form['user_id'] = Auth::user()->id;
        $form['cafetaria_id'] = $request->segment(4);

        Complain::create($form);
        return back();
    }


    // method to handle commend replies
    public function commendReply(Request $request)
    {
        $form = $request->validate([
            'reply' => 'required',
        ]);

        $form['message_id'] = $request->segment(3);

        Commendreply::create($form);
        return back();
    }


    // method to handle complain replies
    public function complainReply(Request $request)
    {
        $form = $request->validate([
            'reply' => 'required',
        ]);

        $form['message_id'] = $request->segment(3);

        Complainreply::create($form);
        return back();
    }


    // Method to handle rating
    public function rate(Request $request){
        $form = $request->validate([
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required',
            'question5' => 'required',
            'question6' => 'required',
            'question7' => 'required',
            'caf_id' => 'required',
        ]);
    }
}
