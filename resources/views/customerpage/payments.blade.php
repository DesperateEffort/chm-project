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
          <div class="form-group row">
            <div class=" h4  p-2 ml-4 col-md-6 font-weight-bolder pl-5 bg-grn font-wht text-md-left">
              Payments Method!
            </div>
          </div>
          <br />
          <br />
          {{ empty($subscriptionID) || ($subscriptionID!='A' && $subscriptionID!='B' && $subscriptionID!='C') ? '' : "You availed Package ".$subscriptionID."!" }}
          @if (!empty($subscriptionID) && ($subscriptionID!='A' || $subscriptionID!='B' || $subscriptionID!='C')) <br />Please pay the amount of PHP @endif
          {{ (!empty($subscriptionID) && $subscriptionID=='A') ?  '2,999.00' : ''}}
          {{ (!empty($subscriptionID) && $subscriptionID=='B') ?  '3,999.00' : ''}}
          {{ (!empty($subscriptionID) && $subscriptionID=='C') ?  '6,890.00' : ''}}
          @if (!empty($subscriptionID) && ($subscriptionID!='A' || $subscriptionID!='B' || $subscriptionID!='C')) <br /><br /> @endif
          <b>a. Via Remittance Centers: </b><br />
          <div class="form-group row p-3">
            <div class="col-md-2"><img src="/storage/img/1.jpg" class="w-100"></div>
            <div class="col-md-2"><img src="/storage/img/2.jpg" class="w-100"></div>
            <div class="col-md-2"><img src="/storage/img/3.jpg" class="w-100"></div>
            <div class="col-md-2"><img src="/storage/img/4.jpg" class="w-100"></div>
            <div class="col-md-2"><img src="/storage/img/5.jpg" class="w-100"></div>
            <div class="col-md-2"><img src="/storage/img/6.jpg" class="w-100"></div>
          </div>
          <div class="form-group row p-3">
            <div class="col-md-3"><img src="/storage/img/7.jpg" alt="" class="w-100 h-75"></div>
            <div class="col-md-5"><b>Smart Padala No.</b><br />5577 5193 2319 2105</div>
          </div>
          <br />
          <div class="payments_box bg-ylw col-md-7 p-3 pl-5">
            <div class="form-group row p-0">
              <div class="col-md-3">Receiver: <br/>Contact No.: <br/>Address: </div>
              <div class="col-md-6">Marc P. Hic<br/>0949 917 5803<br/>GMA, Cavite</div>
            </div>            
          </div>
          <br /><br/> 
          <b>b. or through bank deposit:</b><br/><br/>
          <div class="payments_box bg-ylw col-md-7 p-3 pl-5bg-ylw col-md-7 p-3 pl-5">
            <div class="form-group row p-0">
              <div class="col-md-6 p-0">PNB SAVINGS BANK</div>
            </div>   
            <div class="form-group row p-0">
              <div class="col-md-3">Account Name: <br/>Account No.: </div>
              <div class="col-md-6">CHQ TUTORIAL AND REVIEW CENTER<br/>631810041211</div>
            </div>   
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection