@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        @include('layouts/miniheader')
        <div class="card-body">
          <form action="/VideoUploaded" enctype="multipart/form-data" method="post">
          @csrf
            <div class="form-group row">
              <H1 class="pl-5 pt-2">Upload Video</H1>
            </div>
            <div class="form-group row">
            
              <label for="title" class="col-md-3 text-md-left pt-2 col-form-label">  
                <h5>Title of Video:</h5>
              </label>
              <div class="col-md-5">
                <input id="title" type="text" 
                  class="form-control @error('title') is-invalid @enderror"
                  name="title" 
                  value="{{ old('title') }}"
                  autocomplete="title" autofocus>
                @error('title')
                  <span class="invalid-feedback" role="alert">
                    <strong class="font-12px">{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="type"class="col-md-3 col-form-label">  
                <h5>Categories of Video:</h5>
              </label>
              <div class="col-md-6">
              <select id="type" name="type">
                <option value="">Select type</option>
                @foreach ($videotype as $Video_Type)
                  <option value="">{{ $Video_Type->title }}</option>
                  @php($VideoSubType = App\VideoSubType::orderBy('id', 'ASC')->where('video_type_id', '=', $Video_Type->id)->get())
                  @foreach ($VideoSubType as $Video_SubType)
                    <option value="{{$Video_SubType->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$Video_SubType->title}}</option>
                  @endforeach
                @endforeach
              </select>
                @error('type')
                  <br class="p-0" />
                  <span class="" role="alert">
                    <strong class="font-red font-12px">{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="video"class="col-md-3 col-form-label">  
                <h5>Store Video:</h5>
              </label>
              <div class="col-md-6">
                <input type="file" class="form-control-file" id="video" name="video">
                @error('video')
                  <strong class="font-red font-12px">{{ $message }}</strong>
                @enderror
              </div>
            </div>
            <div class="pt-4 pl-4 pb-2">
              <button class="btn btn-primary">Upload a Video!</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection