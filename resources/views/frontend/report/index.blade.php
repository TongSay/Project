
@extends('layouts.master')

@section('content')

<title>{{$title}}</title>
    <!-- page title -->
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            {{__('menu.report')}}
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="{{ url("/") }}">{{__('menu.home')}}</a></span><span
                                class="page-title-content-inner">{{__('menu.report')}}</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.page-title -->

    <!-- our-profolio -->
    <section class="flat-case-study">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60">
                    </div>
                </div>
                @foreach($reports as $report)
                    

                    <div class="col-md-3 col-sm-6">
                        <div class="list-box-profolio wow fadeInDown">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="{{ asset('Files/Cover')}}/{{$report->image}}"​alt="images" style="width: 100%; height:350px; object-fit: cover;">
                                <div class="profolio-show active">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="{{ asset('Files')}}/{{$report->file}}" download="{{$report->file}}">
                                                <h3 class="section-heading-jost-size20">
                                                    {{ $report->{'title_'.app()->getLocale()} }}
                                                </h3>
                                            </a>
    
    
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30">
                        </div>
                    </div>
                @endforeach
                
                
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="145" data-mobile="60" data-smobile="60">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /our profolio -->

@endsection