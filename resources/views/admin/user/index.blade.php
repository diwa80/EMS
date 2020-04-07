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
                  Users
              </header>
              <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">

              <thead>
              <button type="button" class="btn btn-round btn-danger" style="height:35px; width:76px;">
                <a href= "{{route('users/create')}}" style="color:white;">Create</a>
              </button>

             
              <tr>
                  <th>User's Photo</th>
                  <th>Name</th>
                  <th class="hidden-phone">Email</th>
                  <th>Role</th>
                  <th class="hidden-phone">Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($user as $data)
              <tr class="gradeX">
              <td>  <a href="#"><img src="{{ asset($data -> avatar) }}" alt="" height="80px" width="80px"></a></td>

                 <td>{{$data->name }}</td>
                  <td>{{$data->email }}</td>
                  <td></td>                  
                  <td><a class="btn btn-primary btn-xs" title="Detail" href="{{route('users/edit', $data->id)}}"><i class="fa fa-eye"></i>
                  </a>&nbsp;<a class="btn btn-danger btn-xs" title="Delete" href="{{route('users/delete', $data->id)}}"><i class="fa fa-trash-o"></i></a></td>
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