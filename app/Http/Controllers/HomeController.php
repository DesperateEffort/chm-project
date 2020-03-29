<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

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
        return view('home');
    }
    public function subscription()
    {
      $approve_tag = 0;
      $package = 0;
      
      if (auth::check()) {
        $UserID = auth()->User()->id;
        if(auth()->user()->user_level == '0'){
          $User_subs_num = DB::table('user_subscriptions')->where('user_id', '=', $UserID)->count();
          if ($User_subs_num != '0') {
            $User_subs = DB::table('user_subscriptions')->where('user_id', '=', $UserID)->first();
            $approve_tag = $User_subs->approve_tag;
            $package = $User_subs->subscription_id;
          }
        }
      }
      return view('/customerpage/subscription', [
        'approve_tag' => $approve_tag,
        'package' => $package,
      ]);
    }
}
