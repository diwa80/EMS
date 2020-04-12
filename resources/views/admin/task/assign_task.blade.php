@extends('admin.layouts.app') 

@section('css') 

@endsection 

@section('content')


    <section class="card">
        <header class="card-header">
            Assign Tasks
        </header>
        <div class="card-body">
        <form class="form-horizontal" action="{{route('assign_task/store')}}" method="Post" role="form" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <!-- <div class="form-group">
            <label class="col-lg-2 control-label" >Employee Name</label>
            <div class="col-lg-10">
            <input name="employee" id="tagsinput" class="tagsinput" >
            </div>
        </div> -->

        <div class="form-group">
         <label class="col-lg-2 control-label" >Employee Name</label>
            <div class="col-lg-10">
                <select name="employee" class="form-control form-control-sm mb-2" >
                <option>Select User</option>

                @foreach($users as $data)
                    <option>{{ $data -> name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label  class="col-lg-2 control-label">Tasks</label>
            <div class="col-lg-10">
                <textarea name="tasks" id="bio" class="form-control"  cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" class="finish btn btn-danger" value="Assign Task"/>
        </form>

        </div>
    </section>


@endsection

@section('js')
<script src="{{asset('admin/js/jquery.tagsinput.js')}}"></script>

<script>
    $(function() {
        $(".tagsinput").tagsInput();
    });
</script>

@endsection