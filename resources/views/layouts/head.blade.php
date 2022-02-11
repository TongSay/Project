<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{app()->getLocale()}}" lang="{{app()->getLocale()}}">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{$title}}</title> --}}

    <meta name="author" content="themesflat.com">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/stylesheet/bootstrap.css')}} ">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/stylesheet/style.css')}}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/stylesheet/responsive.css')}}">

    <!-- icoomon font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/stylesheet/icomoon.css')}}">

    <!-- core:css -->
	<link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- Favicon and touch icons  -->
    
    
    <link href="{{ asset('template/icon/Favicon.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('template/icon/Favicon.png')}}" rel="shortcut icon">

    <!-- anime -->
    <link rel="stylesheet" href="{{ asset('template/stylesheet/animate.css')}}">


<!-- Multple File Upload -->


<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>



  <!-- Filepond stylesheet -->


  <link href="https://unpkg.com/filepond/dist/filepond.min.css" rel="stylesheet">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css" rel="stylesheet">

    @if(app()->getLocale() == 'en')
    <style  type="text/css">
      @font-face {
  font-family: "feather";
  src: url(../../fonts/khmer-font/Normal/Siemreap-Regular.ttf);
  src: url('../fonts/feather.eot?t=1525787366991'); /* IE9*/
  src: url('../fonts/feather.eot?t=1525787366991#iefix') format('embedded-opentype'), /* IE6-IE8 */
  url('../fonts/feather.woff?t=1525787366991') format('woff'), /* chrome, firefox */
  url('../fonts/feather.ttf?t=1525787366991') format('truetype'), /* chrome, firefox, opera, Safari, Android, iOS 4.2+*/
  url('../fonts/feather.svg?t=1525787366991#feather') format('svg'); /* iOS 4.1- */
}


      /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
     #map {
      
      height: 400px;
    }

    .controls:focus {
      border-color: #4d90fe;
    }

    .title {
      font-weight: bold;
    }

    #infowindow-content {
      display: none;
    }

    #map #infowindow-content {
      display: inline;
    }

    </style>
  @endif

  @if(app()->getLocale() == 'kh')
    <style  type="text/css">
      @font-face {
        font-family: khmerFOnt;
        
        src: url(../../fonts/khmer-font/Normal/Siemreap-Regular.ttf);


       
      }
      body{
        font-family: khmerFOnt, Arial;
        
		
      }


      /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      
      height: 400px;
    }

    

    .controls:focus {
      border-color: #4d90fe;
    }

    .title {
      font-weight: bold;
    }

    #infowindow-content {
      display: none;
    }

    #map #infowindow-content {
      display: inline;
    }

    </style>
  @endif



</head>