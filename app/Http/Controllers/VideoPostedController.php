<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoPostedController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index($PostedVideoID)
  {
    $UserID = auth()->User()->id;
    $UserLevel = auth()->User()->user_level;
    if($UserLevel == '0') {
      $UserSubscription_num = DB::table('user_subscriptions')->where('user_id', '=', $UserID)->count();
      if ($UserSubscription_num != 0){
        $userSUbscription_subs = DB::table('user_subscriptions')->where('user_id', '=', $UserID)->get();
        foreach ($userSUbscription_subs as $userSUbscription_subs_for) { 
          $approve_tag = $userSUbscription_subs_for->approve_tag;
          if ($approve_tag == '0') {
            return redirect('/');
          }
        }
      } else {
        return redirect('/');
      }
    }
    $PostedVideoID_fof = Video::findOrFail($PostedVideoID);
    $VideoDB = DB::table('videos')->where('id', '=', $PostedVideoID)->get();
    return view('/customerpage/PostedVideo', [
      'PostedVideoID' => $VideoDB,
    ]);
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
