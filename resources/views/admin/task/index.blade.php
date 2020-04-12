@extends('admin.layouts.app')

@section('css')
<link href="{{asset('admin/css/tasks.css')}}" rel="stylesheet">
@endsection


@section('content')

            

            
                   
                   
                        <!-- <div class="row" id="draggable_portlets">
                    @foreach($assign_tasks as $data)
                            <div class="col-md-4 column sortable">
                              
 
                               
                                <div class="card ">
                                    <div class="card-header bg-danger text-light">{{ $data -> employee}}</div>
                                    <div class="card-body">
                                    {{ $data -> tasks}}
                                    </div>
                                </div>
                          
                              
                            </div>
                            @endforeach
                        </div> -->

                      <section class="card tasks-widget">
                          <header class="card-header">
                              Tasks
                          </header>
                          <div class="card-body">
                      
                              <div class="task-content">
                              @if($assign_tasks->count()>0)
                             
                              @foreach($assign_tasks as $data)
                                  <ul class="task-list">
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp"> {{ $data->tasks}}</span>
                                              <span class="badge badge-sm badge-danger">{{ $data->employee}}</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-sm"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                 </ul>    
                                 @endforeach  
                                 @else
                                 <ul class="task-list">
                                      <li>
                                        {{ "No Tasks" }} 
                                      </li>
                                 </ul> 
                                 @endif
                              </div>
                          </div>
                      </section>
                 
        

@endsection

@section('js')

<script src="{{asset('admin/js/draggable-portlet.js')}}"></script>
    <script src="{{asset('admin/js/tasks.js')}}" type="text/javascript"></script>


<script>
    jQuery(document).ready(function() {
            TaskList.initTaskWidget();
        });
</script>

    <!-- <script>
        jQuery(document).ready(function() {
            DraggablePortlet.init();
        });
    </script> -->

@endsection