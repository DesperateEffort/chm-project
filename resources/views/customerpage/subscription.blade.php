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
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-center">&nbsp;</div>
            <div class="col-md-2  text-md-center">
              <b>PHP 2,999</b>
            </div>
            <div class="col-md-2  text-md-center">
              <b>PHP 3,999</b>
            </div>
            <div class="col-md-2  text-md-center">
              <b>PHP 6,890</b>
            </div>
          </div>

          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-center"></div>
            <div class="col-md-2 p-0">
              <center>
                <div class="subscription-reserve bg-red">PROMO UNTIL<br />JUL. 31, 2020</div>
              </center>
            </div>
            <div class="col-md-2 p-0">
              <center>
                <div class="subscription-reserve bg-red">PROMO UNTIL<br />JUL. 31, 2020</div>
              </center>
            </div>
            <div class="col-md-2 pb-0">
              <div class="subscription-column">until <br />NOV. 30, 2020</div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-center"></div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">90-DAY <br />SUBSCRIPTION</div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">360-DAY <br />SUBSCRIPTION</div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">360-DAY <br />SUBSCRIPTION</div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-center"></div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">&nbsp;</div>
            </div>
            <div class="col-md-2 p-0">
              <center>
                <div class="subscription-reserve bg-red font-weight-bolder">BEST SELLER!</div>
              </center>
            </div>  
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">&nbsp;</div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">Updated and Complete Coverage of all topics in Civil Service Exam</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">Watch Videos anytime, anywhere & Multiple times</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">Actual Review class from Licensed Teachers & Professionals</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">Access videos in Both Professional and Sub Professional</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">Videos module with explanaion for every topic</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">With Strategies, Techniques, Methods on how to pass the exam</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">FREE CSE Reviewer booklet Questionnaire and FREE Shipping fee</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">&nbsp;</div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">Weekly FB Messenger CSE Review</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">&nbsp;</div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">Teqniques on how to easily memorize words & phrases and remember it for exam</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">&nbsp;</div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column">
                <input type="checkbox" disabled checked>
                <span class="checkmark"></span>
                &nbsp;
              </div>
            </div>
          </div>
          @if (Auth::User()->user_level=='0')
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-center">
            
            </div>
            @if ($approve_tag == '0' and $package == '0')
              <div class="col-md-2 p-0">
                <center>
                  <div class="subscription-reserve"><b><a href="/subscribetoPlan/A" class="font-wht subscription-a">RESERVE MY SLOT!</a></b></div>
                </center>
              </div>
              <div class="col-md-2 p-0">
                <center>
                  <div class="subscription-reserve"><b><a href="/subscribetoPlan/B" class="font-wht subscription-a">RESERVE MY SLOT!</a></b></div>
                </center>
              </div>
              <div class="col-md-2 p-0">
                <center>
                  <div class="subscription-reserve"><b><a href="/subscribetoPlan/C" class="font-wht subscription-a">RESERVE MY SLOT!</a></b></div>
                </center>
              </div>
            @else
              @if ($package === 'A')
                <div class="col-md-2 p-0">
                  <center><div class="subscription-reserve"><b>
                    @if ($approve_tag === '1')
                      <br />Reserved to this Package.<br /><br />
                    @else
                      <a href="/PaymentsMethod" class="font-wht subscription-a">
                        Requested for this Package.<br />Waiting for approval.
                      </a>
                    @endif
                  </b></div></center>
                </div>
              @else
                <div class="col-md-2 text-md-center">
                  <div class="subscription-column">
                    &nbsp;<br /> <br /> <br />
                  </div>
                </div>
              @endif
              @if ($package === 'B')
                <div class="col-md-2 p-0">
                  <center><div class="subscription-reserve"><b>
                    @if ($approve_tag === '1')
                      <br />Reserved to this Package.<br /><br />
                    @else
                      <a href="/PaymentsMethod" class="font-wht subscription-a">
                        Requested for this Package.<br />Waiting for approval.
                      </a>
                    @endif
                  </b></div></center>
                </div>
              @else
                <div class="col-md-2 text-md-center">
                  <div class="subscription-column">
                    &nbsp;<br /> <br /> <br />
                  </div>
                </div>
              @endif
              @if ($package === 'C')
                <div class="col-md-2 p-0">
                  <center><div class="subscription-reserve"><b>
                    @if ($approve_tag === '1')
                      <br />Reserved to this Package.<br /><br />
                    @else
                      <a href="/PaymentsMethod" class="font-wht subscription-a">
                        Requested for this Package.<br />Waiting for approval.
                      </a>
                    @endif
                  </b></div></center>
                </div>
              @else
                <div class="col-md-2 text-md-center">
                  <div class="subscription-column">
                    &nbsp;<br /> <br /> <br />
                  </div>
                </div>
              @endif
            @endif
          </div>
          @endif
          <div class="subscription-form-group row">
            <div class="col-md-6 text-md-left">&nbsp;</div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column mh-10px">&nbsp;</div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column mh-10px">&nbsp;</div>
            </div>
            <div class="col-md-2 text-md-center">
              <div class="subscription-column mh-10px">&nbsp;</div>
            </div>
          </div>
          <div class="subscription-form-group row">
            <div class="col-md-12 text-md-center pt-3">For Payments Method, please click <a href="/PaymentsMethod" class="a-here">here!</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection