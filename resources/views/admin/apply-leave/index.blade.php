@extends('admin.layouts.app')

@section('css')

@endsection

@section('content')

<div class="row">
                <div class="col-sm-12">
              <section class="card">
              <header class="card-header">
                  Leave Details
              </header>
              <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table" style="margin-top:30px;">

              <thead>
            
              <tr>
              <th>S.N</th>
                  <th>Employee Name</th>
                  <th>Leave Type</th>
                  <th>Date from</th>
                  <th>Date to</th>
                  <th>No. of days</th>
                  <th>Reason</th>
                  <th>Leave type</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
                 
                  @foreach($leave as $data)
                  <tr class="gradeX">
                  <td>{{$loop -> index+1 }}</td>
                  <td>{{ Auth::user()->name }}</td>
                   <td>{{ $data -> leave_type}}</td>
                    <td>{{ $data -> date_from}}</td>
                    <td>{{ $data -> date_to}}</td>
                    <td>{{ $data -> days}}</td>
                    <td>{{ $data -> Reason}}</td>
                    <td> <input type="submit" class="btn btn-primary  btn-sm" value="Paid"/>
                    <input type="submit" class="btn btn-danger  btn-sm" value="Unpaid"/>
                    </td>
                    <td><input type="submit" class="btn btn-primary  btn-sm" value="Accepted"/>
                    <input type="submit" class="btn btn-danger  btn-sm" value="Rejected"/>
                    </td>
                  </tr>
                   @endforeach
                   </tbody>
              </table>
              </div>
              </div>
              </section>
              </div>
              </div>
@endsection


@section('js')

<script type="text/javascript" language="javascript" src="{{asset('admin/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{asset('admin/js/respond.min.js')}}" ></script>

        <!--dynamic table initialization -->
    <script src="{{asset('admin/js/dynamic_table_init.js')}}"></script>


  
@endsection  