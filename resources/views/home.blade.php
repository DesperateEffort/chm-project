@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        @include('layouts/miniheader')
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <br />
          Hi 
          {{ Auth::User()->user_level=='2' ? 'Master' : '' }}
          {{ Auth::User()->user_level=='1' ? 'Admin' : '' }}
          {{ Auth::User()->user_level=='0' ? 'Customer' : '' }}
          {{ Auth::user()->fir_name }} {{ Auth::user()->suffix_name }},
          welcome to Community's Holistic and Qualitative Institute Inc. (CHQ).
          <br /><br />
          @if (Auth::User()->user_level=='0')
            To begin, please setup your subscription <a href="/subscription">here</a>.
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection