@extends('layouts.app')

@section('content')
              <script>
                document.getElementById('video').play();
              </script>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        @include('layouts/miniheader')
        <div class="card-body">
        @foreach ($PostedVideoID as $PostedVideo)
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <div class="form-group row">
            <div class=" h4  p-2 ml-4 col-md-6 font-weight-bolder pl-5 bg-grn font-wht text-md-left">
              {{ $PostedVideo->title }}
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12 text-md-center">
              <video id="video" width="720" height="576" controls autoplay controlsList="nodownload" oncontextmenu="return false;">
                <source src="{{ $PostedVideo->videopath }}" type="video/mp4">
                Your browser does not support the video tag.
              </video> 
              
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection