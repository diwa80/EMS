@extends('admin.layouts.app')

@section('css')


@endsection


@section('content')

<header class="card-header">        
     Assign Tasks
</header>
        <section class="card">
            <div class="card-body">
            <form action="#" class="form-horizontal tasi-form">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Users</label>
                        <div class="col-md-9">
                            <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]">
                                <option>USer 1</option>
                                <option>USer 1</option>
                                <option selected>USer 1</option>
                                <option>USer 1</option>
                                <option>USer 1</option>
                                <option>USer 1</option>
                                
                            </select>
                        </div>
                    </div>
                
                    

                </div>
            </form>
            </div>
        </section>


@endsection

@section('js')
<script src="{{asset('admin/js/jquery.tagsinput.js')}}"></script>
<script src="{{asset('admin/js/form-component.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('admin/js/advanced-form-components.js')}}"></script>

<script type="text/javascript">

$(document).ready(function () {
    $(".js-example-basic-single").select2();

    $(".js-example-basic-multiple").select2();
});
</script>

@endsection