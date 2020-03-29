<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ListofRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function VideoIndex()
    {
      $VideoList = DB::table('videos')->get();
      $VideoList_num = DB::table('videos')->count();
      $view_ok = 0;
      if (auth::check()) {
        $UserID = auth()->User()->id;
        $UserLevel = auth()->User()->user_level;
        if($UserLevel == '0') {
          $UserSubscription_num = DB::table('user_subscriptions')->where('user_id', '=', $UserID)->count();
          if ($UserSubscription_num != 0){
            $userSUbscription_subs = DB::table('user_subscriptions')->where('user_id', '=', $UserID)->first();
            if ($userSUbscription_subs->approve_tag == '1') {
              $view_ok = 1;
            } 
          }
        } else {
          $view_ok = 1;
        }
      }
      return view('/customerpage/VideoList', [
        'VideoList' => $VideoList,
        'VideoList_num' => $VideoList_num,
        'Ok_toview' => $view_ok,
      ]);
    }
    public function CustomerIndex()
    {
      $UserID = auth()->User()->id;
      $UserLevel = auth()->User()->user_level;
      if($UserLevel == '0') {
        return redirect('/');
      }
      
      $CustomerList = DB::table('Users')->where('user_level', 0)->get();
      $CustomerList_num = DB::table('Users')->where('user_level', 0)->count();
      return view('/adminpage/CustomerList', [
        'CustomerList' => $CustomerList,
        'CustomerList_num' => $CustomerList_num,
      ]);
    }

    
    public function AdminIndex()
    {
      $UserID = auth()->User()->id;
      $UserLevel = auth()->User()->user_level;
      if($UserLevel == '0') {
        return redirect('/');
      }
      $AdminList = DB::table('Users')
        ->where([
          ['user_level', '>=', 0], 
          ['id', '!=', $UserID],
          ['user_level', '!=', 2], 
        ])
        ->get();
      $AdminList_num = DB::table('Users')
        ->where('user_level', '=', 1)
        ->count();
      return view('/adminpage/AdminList', [
        'AdminList' => $AdminList,
        'AdminList_num' => $AdminList_num,
      ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
