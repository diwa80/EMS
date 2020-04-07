@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery.steps.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/bootstrap-datepicker/css/datepicker.css')}}" />

@endsection

@section('content')
<div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Create Users
                          </header>
                          <div class="card-body">
                             
                              <form class="form-horizontal" action="{{route('users/store')}}" id="default" method="post" role="form" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                  <fieldset title="Step1" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label" >Full Name</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "name" placeholder="Full Name" value="{{ old('name')}}">
                                              @if ($errors->has('fname')) <p class="help-block">{{ $errors->first('fname') }}</p> @endif
                                            </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Email Address</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "email" placeholder="Email Address" value="{{ old('email')}}">
                                          </div>
                                      </div>
                                     

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Password</label>
                                          <div class="col-lg-10">
                                              <input type="password" class="form-control" name= "password" placeholder="Password">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label"> Confirm Password</label>
                                          <div class="col-lg-10">
                                              <input type="password" class="form-control" name= "c-password" placeholder="Confirm Password">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-lg-2 control-label"><b>Profile Image</b></label>
                                        <div class=" col-lg-10 custom-file">
                                            <input type="file" id="avatar" name="avatar" class="custom-file" value="{{ old('profile_image') }}" >
                                        </div>
                                      </div>

                                  </fieldset>
                                                                  
                               
                                  <input type="submit" class="finish btn btn-danger" value="Create"/>
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


@endsection


