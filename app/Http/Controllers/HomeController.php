<?php

namespace App\Http\Controllers;

use App\Models\Cafetaria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $current_caf = Cafetaria::select('*')->get();
        // echo($current_caf);
        return view('home', [
            'cafetarias' => $current_caf
        ]);
    }
}
