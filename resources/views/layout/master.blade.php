<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset('assets/images/ori_3804685_jxcl53g8zrm4em9po59shf59tkf0ggorh72crex8_monogram-pa-logo-design.png') }}" type="image/x-icon"> <!-- Favicon-->
<title>@yield('title')</title>

<meta name="description" content="@yield('meta_description', config('app.name'))">
<meta name="author" content="@yield('meta_author', config('app.name'))">

@yield('meta')
@stack('before-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">    
@stack('after-styles')
@if (trim($__env->yieldContent('page-styles')))    
@yield('page-styles')
@endif    

<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/theme1.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">

</head>

<body class="font-montserrat">
    
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    
    @include('layout.headertop')
    @include('layout.rightbar')
    @include('layout.userdiv')    
    @include('layout.sidebar')

    <div class="page">
        @include('layout.page_header')

        @yield('content')

        @include('layout.footer')
    </div>  
          
</div>


@yield('popup')

<!-- Scripts -->
@stack('before-scripts')


<script src="{{ asset('assets/bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/selectize.bundle.js') }}"></script>
<script src="{{ asset('assets/js/vendors/selectize.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('assets/plugins/multi-select/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/form/form-advanced.js') }}"></script>
<!-- <script src="{{ asset('assets1/js/jquery.dataTables.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets1/js/dataTables.bootstrap4.min.js') }}"></script> -->
<script src="{{URL::to('assets1/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{ asset('assets/bundles/counterup.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('assets/js/page/dialogs.js') }}"></script>
<script src="{{ asset('assets/js/form/dropify.js') }}"></script>
<script src="{{ asset('assets/bundles/dataTables.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/parsleyjs/js/parsley.min.js') }}"></script>
<script src="{{ asset('assets/js/form/parsleyjs.js') }}"></script>
<!-- <script src="{{ asset('assets/js/table/datatable.js') }}"></script> -->


@stack('after-scripts')

@if (trim($__env->yieldContent('page-script')))
@yield('page-script')
@endif

</body>
</html>
