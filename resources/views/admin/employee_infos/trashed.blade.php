@extends('admin.layouts.app')

@section('css')
<link href="{{asset('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('admin/assets/data-tables/DT_bootstrap.css')}}" />
@endsection

@section('content')

<div class="row">
                <div class="col-sm-12">
              <section class="card">
              <header class="card-header">
                 Recycle Bin
              </header>
              <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">

              <thead>
             
              <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Salary</th>
                  <th class="hidden-phone">Hired Date</th>
                  <th class="hidden-phone"></th>
              </tr>
              </thead>
              <tbody>
              
             
              <tr class="gradeX">
              @foreach($employee_infos as $employee_info)
              <tr class="gradeX">
                  <td>{{ $employee_info -> fname}}</td>
                  <td>{{ $employee_info -> position}}</td>
                  <td>{{ $employee_info -> salary}}</td>
                  <td>{{ $employee_info -> hired_date}}</td>
                  <td><a class="btn btn-primary btn-xs" title="Restore" href="{{route('employee_infos/restore', $employee_info->id)}}"><i class="fa fa-trash"></i></a>&nbsp;<a class="btn btn-danger btn-xs" title="Delete" href="{{route('employee_infos/kill', $employee_info->id)}}"><i class="fa fa-trash-o"></i></a></td>


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