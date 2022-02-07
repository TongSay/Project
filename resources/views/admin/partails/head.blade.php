<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Borribo Microfinance Institution PLC</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css')}}">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css')}}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" />

  <link rel="stylesheet" href="{{__('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">


  <!-- plugin css for this Form Page -->
	<link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/jquery-tags-input/jquery.tagsinput.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/dropzone/dropzone.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/dropify/dist/dropify.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css')}}">
  
	<!-- end plugin css for this Form Page -->

  <!-- CKeditor -->
  <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	@if(app()->getLocale() == 'en')
    <style>
      @font-face {
  font-family: "feather";
  src: url(../../fonts/khmer-font/Normal/Siemreap-Regular.ttf);
  src: url('../fonts/feather.eot?t=1525787366991'); /* IE9*/
  src: url('../fonts/feather.eot?t=1525787366991#iefix') format('embedded-opentype'), /* IE6-IE8 */
  url('../fonts/feather.woff?t=1525787366991') format('woff'), /* chrome, firefox */
  url('../fonts/feather.ttf?t=1525787366991') format('truetype'), /* chrome, firefox, opera, Safari, Android, iOS 4.2+*/
  url('../fonts/feather.svg?t=1525787366991#feather') format('svg'); /* iOS 4.1- */
}

    </style>
  @endif

  @if(app()->getLocale() == 'kh')
    <style>
      @font-face {
        font-family: khmerFOnt;
        
        src: url(../../fonts/khmer-font/Normal/Siemreap-Regular.ttf);


       
      }
      body{
        font-family: khmerFOnt, Arial;
        
		
      }

    </style>
  @endif
</head>