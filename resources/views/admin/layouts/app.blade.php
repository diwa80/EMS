<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from thevectorlab.net/flatlab-4/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2020 09:59:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>EMS</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="assets/file-uploader/css/jquery.fileupload.css">

    <link href="{{asset('admin/assets/jquery-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet" type="text/css" >
    <!--right slidebar-->
    <link href="{{asset('admin/css/slidebars.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet" />

    <link href="{{asset( 'admin/assets/jquery-multi-select/css/multi-select.css' )}}"  rel="stylesheet" />
    <link href="{{asset( 'admin/assets/select2/css/select2.min.css' )}}"  rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery.steps.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/bootstrap-datepicker/css/datepicker.css')}}" />

    <link href="{{asset('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('admin/assets/data-tables/DT_bootstrap.css')}}" />










    @yield('css')
  </head>

  <body>
  <section id="container" class="">
    @include('admin.includes.header')
    @include('admin.includes.sidebar')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
                @yield('content')
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->


</section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('admin/js/jquery.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('admin/js/slidebars.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/respond.min.js')}}" ></script>

    <script src="{{asset('js/advanced-form-components.js')}}"></script>
    <!--common script for all pages-->
    <script src="{{asset('admin/js/common-scripts.js')}}"></script>

 
    


    @yield('js')

</body>
</html>
