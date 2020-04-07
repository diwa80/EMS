@extends('admin.layouts.app')

@section('css')

@endsection


@section('content')

              <header class="card-header">        
                  Tasks
              </header>

              <div class="card-body">
                   
                    <!-- page start-->
                        <div class="row" id="draggable_portlets">
                            <div class="col-md-4 column sortable">
                                <!-- BEGIN Portlet PORTLET-->
                                <div class="card ">
                                    <div class="card-header bg-danger text-light">Portlet 5</div>
                                    <div class="card-body">
                                       
                                    </div>
                                </div>
                                <!-- END Portlet PORTLET-->
                                
                                <!-- END Portlet PORTLET-->
                            </div>
                        </div>
                        <!-- page end-->
              </div>

@endsection

@section('js')

<script src="{{asset('admin/js/draggable-portlet.js')}}"></script>


    <script>
        jQuery(document).ready(function() {
            DraggablePortlet.init();
        });
    </script>

@endsection