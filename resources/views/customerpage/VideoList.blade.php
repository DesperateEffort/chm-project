@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        @include('layouts/miniheader')
        <div class="card-body">
        There are currently {{ $VideoList_num }} Videos posted in this site.
        @foreach ($VideoList as $VideoList_for)
          <div class="form-group row">
            <div class="col-md-12 pl-4 pt-1 pb-1"><h4>
            @if ($Ok_toview == '1')
              <a href="/Video/Posted/{{ $VideoList_for->id}}" class="font-blk subscription-a">
                {{ $VideoList_for->title }}
              </a>
            @else
              {{ $VideoList_for->title }}
            @endif
            </h4></div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection