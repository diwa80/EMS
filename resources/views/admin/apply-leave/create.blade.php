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
                              Apply Leave
                          </header>
                          <div class="card-body">
                             
                              <form class="form-horizontal" action="{{route('apply-leave/store')}}" id="default" method="post" role="form" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                  <fieldset >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label" >Leave Type</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "leave_type" placeholder="Leave Type" >
                                            </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-2"><b>Date From</b></label>
                                        <div class="col-md-4">
                                            <div class="input-group date form_date-component">
                                                <input type="text" name="date-from" id="date-from" class="form-control" readonly="" size="16"  >
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-danger date-set" title="calendar"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2"><b>Date To</b></label>
                                        <div class="col-md-4">
                                            <div class="input-group date form_date-component">
                                                <input type="text" name="date-to" id="date-to" class="form-control" readonly="" size="16"  >
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-danger date-set" title="calendar"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Days</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" name= "days" placeholder="Number of days" >
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Reason</label>
                                          <div class="col-lg-10">
                                              <textarea type="text" class="form-control" name= "Reason" >
                                              </textarea>
                                          </div>
                                      </div>

                                     

                                  </fieldset>
                                 

                                     


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


