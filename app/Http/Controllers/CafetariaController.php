<?php

namespace App\Http\Controllers;

use App\Models\Cafetaria;
use App\Models\Commend;
use App\Models\Commendreply;
use App\Models\Complain;
use App\Models\Complainreply;
use App\Models\Rate;
use App\Models\Winner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CafetariaController extends Controller
{
    //

    public function welcome()
    {
        $current_caf = Cafetaria::select('*')->get();
        // echo($current_caf);
        return view('welcome', [
            'cafetarias' => $current_caf
        ]);
    }

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

        // Get the Winner
        $winner = Winner::select('*')->get();
        try {
            $winner =  $winner[0];
        } catch (\Throwable $th) {
            Winner::create();
        }
        // echo $winner;


        return view('cafetaria', [
            'caf_id' => $caf_id,
            'complains' => $complains,
            'commendations' => $commendations,
            'caf_name' => $caf_name,
            'complains_replies' => $complains_replies,
            'commendations_replies' => $commendations_replies,
            'winner' => $winner,
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
    public function rate(Request $request)
    {
        $form = $request->validate([
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required',
            'question5' => 'required',
            'question6' => 'required',
            'question7' => 'required',
            'cafetaria_id' => 'required',
        ]);

        $form['total'] = $request->question1 + $request->question2 + $request->question3 + $request->question4 +
            $request->question5 + $request->question6 + $request->question7;

        $form['user_id'] = Auth::user()->id;

        Rate::create($form);

        // CALCULATE MOST LOVED CAF
        // DAVTA
        $davta = Rate::select('total')->where('cafetaria_id', 1)->get();
        $total_davta = 0;
        foreach ($davta as $t_davta) {
            $total_davta += $t_davta->total;
        }



        // ETC
        $etc = Rate::select('total')->where('cafetaria_id', 2)->get();
        $total_etc = 0;
        foreach ($etc as $t_etc) {
            $total_etc += $t_etc->total;
        }


        // ULTIMATE
        $ultimate = Rate::select('total')->where('cafetaria_id', 3)->get();
        $total_ultimate = 0;
        foreach ($ultimate as $t_ultimate) {
            $total_ultimate += $t_ultimate->total;
        }

        // find the max
        $loved_caf = max($total_davta, $total_etc, $total_ultimate);

        // push to the DB depending on the max
        if ($loved_caf == $total_davta) {
            DB::table('winner')->update([
                'winner' => 'Davta',
                'votes' => $total_davta
            ]);
        } else if ($loved_caf == $total_etc) {
            DB::table('winner')->update([
                'winner' => 'ETC',
                'votes' => $total_etc
            ]);
        } else {
            DB::table('winner')->update([
                'winner' => 'Ultimate',
                'votes' => $total_ultimate
            ]);
        }
        return back();
    }
}
