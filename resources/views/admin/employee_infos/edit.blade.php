@extends('admin.layouts.app')

@section('css')


@endsection

@section('content')
<div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Edit Employee Details
                          </header>
                          <div class="card-body">
                              <div class="stepy-tab">
                                  <ul id="default-titles" class="stepy-titles clearfix">
                                      <li id="default-title-0" class="current-step">
                                          <div>Step 1</div>
                                      </li>
                                      <li id="default-title-1" class="">
                                          <div>Step 2</div>
                                      </li>
                                      <!-- <li id="default-title-2" class="">
                                          <div>Step 3</div>
                                      </li> -->
                                  </ul>
                              </div>
                              <form class="form-horizontal" action="{{route('employee_infos/update',$employee_infos->id)}}" id="default" method="post" role="form" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                  <fieldset title="Step1" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label" >Full Name</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "fname" placeholder="Full Name" value="{{ $employee_infos->fname }}">
                                              @if ($errors->has('fname')) <p class="help-block">{{ $errors->first('fname') }}</p> @endif
                                            </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Email Address</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "email" placeholder="Email Address" value="{{ $employee_infos->email}}">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">User Name</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "uname" placeholder="Username" value="{{$employee_infos->uname}}">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Password</label>
                                          <div class="col-lg-10">
                                              <input type="password" class="form-control" name= "password" placeholder="Password">
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="Step 2" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Phone</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "phone" placeholder="Phone" value="{{$employee_infos->phone}}">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Position</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "position" placeholder="Position" value="{{$employee_infos->position}}">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Salary</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "salary" placeholder="Salary" value="{{$employee_infos->salary}}">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="control-label col-md-2"><b>Hired Date</b></label>
                                        <div class="col-md-4">
                                            <div class="input-group date form_date-component">
                                                <input type="text" name="date" id="date" class="form-control" readonly="" size="16"value="{{$employee_infos->date}}" >
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-danger date-set" title="calendar"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <label  class="col-lg-2 control-label"><b>Profile Image</b></label>
                                        <div class=" col-lg-10 custom-file">
                                            <input type="file" id="image" name="profile_image" class="custom-file" value="{{$employee_infos->profile_image}}" >
                                        </div>
                                      </div>

                                  </fieldset>
                                  
                               
                                  <input type="submit" class="finish btn btn-danger" value="Finish"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
@endsection

@section('js')

<script src="{{asset('admin/js/bootstrap-validator.min.js')}}" type="text/javascript"></script>

<!--Form Wizard-->
<script src="{{asset('admin/js/jquery.steps.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/jquery.validate.min.js')}}" type="text/javascript"></script>

  <!--script for this page-->
  <script src="{{asset('admin/js/jquery.stepy.js')}}"></script>
  <script type="text/javascript" src="{{asset('admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

  <script>
        $(".form_date-component").datepicker({
            format: "dd MM yyyy",
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });
    </script>
<script>

      //step wizard

      $(function() {
          $('#default').stepy({
              backLabel: 'Previous',
              block: true,
              nextLabel: 'Next',
              titleClick: true,
              titleTarget: '.stepy-tab'
          });
      });
  </script>

@endsection


