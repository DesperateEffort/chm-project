<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    //
    
  public function UserSubscription()
  {
    return view('/customerpage/payments');
  }
}
