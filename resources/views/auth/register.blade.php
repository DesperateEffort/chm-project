@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        @include('layouts/miniheader')
        <div class="card-body">
          <div class="form-group row">
            <div class=" h4  p-2 ml-4 col-md-6 font-weight-bolder pl-5 bg-grn font-wht text-md-left">
              REGISTRATION FORM
            </div>
          </div>
          <form method="POST" action="{{ route('register') }}" class="registration_form">
          @csrf
            <fieldset class="registration">
              <legend>Personal Information</legend>
              <div class="form-group row">
                <div class="col-md-4 text-md-center">
                  <label for="fir_name" class="col-form-label text-md-center">*FIRST NAME</label>
                  <input id="fir_name" type="text" class="form-control @error('fir_name') is-invalid @enderror" name="fir_name" value="{{ old('fir_name') }}" required autocomplete="fir_name" autofocus>
                  @error('fir_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-3 text-md-center">
                  <label for="mid_name" class="col-form-label text-md-center">*MIDDLE NAME</label>
                  <input id="mid_name" type="text" class="form-control @error('mid_name') is-invalid @enderror" name="mid_name" value="{{ old('mid_name') }}" required autocomplete="mid_name" autofocus>
                  @error('mid_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-4 text-md-center">
                  <label for="last_name" class="col-form-label text-md-center">*LAST NAME</label>
                  <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                  @error('last_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-1 text-md-center">
                  <label for="suffix_name" class="col-form-label text-md-center">SUFFIXES</label>
                  <input id="suffix_name" type="text" class="form-control @error('suffix_name') is-invalid @enderror" name="suffix_name" value="{{ old('suffix_name') }}" autocomplete="suffix_name" autofocus>
                  @error('suffix_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="location" class="col-md-4 col-form-label text-md-center">*ADDRESS</label>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location">
                  @error('location')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <br />
              <div class="form-group row">
                <div class="col-md-4 text-md-center">
                  <label for="contact" class="col-form-label text-md-center">*CONTACT NO.</label>
                  <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>
                  @error('contact')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-4 text-md-center">
                  <label for="age" class="col-form-label text-md-center">*AGE</label>
                  <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
                  @error('age')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-4 text-md-center">
                  <label for="gender" class="col-form-label text-md-center">*GENDER</label>
                  <div class="pl-5 text-md-left ml-5">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female" required autofocus>
                    <label for="female">Female</label><br>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="profession" class="col-md-4 col-form-label text-md-right">{{ __('*PROFESSION') }}</label>
                <div class="col-md-6">
                  <select id="profession" name="profession" class="registration"  required autofocus>
                    <option value="">Select Level</option>
                    <option value="Professional">Professional</option>
                    <option value="Sub Professional">Sub Professional</option>
                  </select>
                  @error('profession')
                      <strong class="font-red font-12px">{{ $message }}</strong>
                  @enderror
                </div>
              </div>
            </fieldset>
            <br /><br />
            <fieldset class="registration">
              <legend>Account Information</legend>
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('*E-MAIL ADDRESS') }}</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('*PASSWORD') }}</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('*CONFIRM PASSWORD') }}</label>
                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>
            </fieldset>
            <br/>
            <div class="form-group row mb-0">
              <div class="col-md-12 text-md-center">
                <button type="submit" class="btn btn-primary">
                  {{ __('REGISTER ') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
