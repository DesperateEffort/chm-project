<?php

namespace App\Http\Controllers;

use App\user;
use App\UserSubscription;
use Illuminate\Http\Request;

class UserSubscriptionController extends Controller
{
  
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function store($subscriptionID)
  {
    auth()->user()->UserSubscription()->create([
      'subscription_id' => $subscriptionID,
      'approve_tag' => '0',
    ]);
    return redirect('/PaymentsMethod/'.$subscriptionID);
  }
  public function view($subscriptionID)
  {
    if ($subscriptionID!='A' and $subscriptionID!='B' and $subscriptionID!='C'){
      $subscriptionID_fof = UserSubscription::findOrFail($subscriptionID);
    }
    return view('/customerpage/payments', [
      'subscriptionID' => $subscriptionID,
    ]);
  }
}
