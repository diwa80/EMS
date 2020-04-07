@extends('admin.layouts.app')

@section('css')

@endsection

@section('content')

<div class="row">
                <div class="col-sm-12">
              <section class="card">
              <header class="card-header">
                  Employee Details
              </header>
              <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table" style="margin-top:30px;">

              <thead>
              <button type="button" class="btn btn-round btn-danger" style="height:35px; width:76px;">
                <a href= "{{route('employee_infos/create')}}" style="color:white;">Create</a>
              </button>

              <button type="button" class="btn btn-round btn-primary pull-right" style="height:35px; width:110px;">
                <a href= "{{route('employee_infos/trashed')}}" style="color:white;">Recycle Bin</a>
              </button>
              <tr>
                  <th>Employee Image</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Salary</th>
                  <th>Hired Date</th>
                  <th>Action</th>
                 

              </tr>
              </thead>
              <tbody>
             
              @foreach($employee_infos as $data)
              <tr class="gradeX">
                  <td>  <a href="#"><img src="{{ asset($data -> profile_image) }}" alt="" height="80px" width="80px"></a></td>
                  <td> {{ $data -> fname}}</td>
                  <td>{{ $data -> position}}</td>
                  <td>{{ $data -> salary}}</td>
                  <td>{{ $data -> hired_date}}</td>
                  <td><a class="btn btn-primary btn-xs" title="Detail" href="{{ route('employee_infos/edit',$data->id)}}"><i class="fa fa-eye"></i></a>&nbsp;<a class="btn btn-danger btn-xs" title="Delete" href="{{route('employee_infos/delete', $data->id)}}"><i class="fa fa-trash-o"></i></a></td>


                  <!-- <td class="center hidden-phone">4</td>
                  <td class="center hidden-phone">X</td> -->
              </tr>
             @endforeach
              </tfoot>
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