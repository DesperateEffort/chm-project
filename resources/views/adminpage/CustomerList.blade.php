@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        @include('layouts/miniheader')
        <div class="card-body">
        There are currently {{ $CustomerList_num }} Customer Registered in this site. <br /><br />
        @foreach ($CustomerList as $CustomerList_for)
          <div class="form-group row">
            <div class="col-md-12 pl-4 pt-1 pb-1">
              <h4>
                {{ $CustomerList_for->fir_name }} 
                {{ $CustomerList_for->mid_name }} 
                {{ $CustomerList_for->last_name }} 
              </h4>
              @php($Customer_Subs_num = DB::table('user_subscriptions')->where('user_id', $CustomerList_for->id)->count())
              @if ($Customer_Subs_num != '0')
                @php($Customer_Subs_sql = DB::table('user_subscriptions')->where('user_id', $CustomerList_for->id)->first())
                @if ($Customer_Subs_sql->approve_tag == 0)
                  Request for a subscription of package {{ $Customer_Subs_sql->subscription_id }}. Do you want to 
                  <a href="/Approve/Customer/1/{{ $CustomerList_for->id }}" class="font-blk subscription-a">approve</a>?
                @else 
                  Subscribed to package {{ $Customer_Subs_sql->subscription_id }}. Do you want the user to 
                  <a href="/Approve/Customer/0/{{ $CustomerList_for->id }}" class="font-blk subscription-a">unsubscribe</a>?
                @endif
              @else
                No Subscription
              @endif
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection