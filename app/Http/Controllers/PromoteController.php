<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromoteController extends Controller
{
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

    // From Admin, demote to Customer
    // From Customer promote to Admin
    public function PromoteEdit($UserLevel, $id)
    {
      $UserLevel_sql = auth()->User()->user_level;
      if ($UserLevel_sql == 0){
        return redirect('/');
      }
      DB::table('users')
      ->where('id', $id)
      ->update(['user_level' => $UserLevel]);
      return redirect('/AdminList');
    }

    public function ApproveCustomerEdit($ApproveTag, $id)
    {
      $user_level = auth()->User()->user_level;
      if ($user_level == 0){
        return redirect('/');
      }
      DB::table('user_subscriptions')
      ->where('user_id', $id)
      ->update(['approve_tag' => $ApproveTag]);
      return redirect('/CustomerList');
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
