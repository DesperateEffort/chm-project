@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        @include('layouts/miniheader')
        <div class="card-body">
        There are currently {{ $AdminList_num }} Admin&#40;s&#41; registered in this site.
        @foreach ($AdminList as $AdminList_for)
          <div class="form-group row">
            <div class="col-md-12 pl-4 pt-1 pb-1">
              <h4>
                {{ $AdminList_for->fir_name }} 
                {{ $AdminList_for->mid_name }} 
                {{ $AdminList_for->last_name }} 
              </h4>
              This user is {{ $AdminList_for->user_level === '0' ? "a Customer" : "an Admin" }}. 
              @if ($AdminList_for->user_level == '0')
                Do you want to promote this user as 
                <a href="/Promote/1/{{ $AdminList_for->id }}" class="font-blk subscription-a">Admin</a>?
              @else
                Do you want to demote this user as 
                <a href="/Promote/0/{{ $AdminList_for->id }}" class="font-blk subscription-a">Customer</a>?
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