

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
                        {{__('menu.job')}}
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="{{ url("/") }}">{{__('menu.home')}}</a></span><span
                            class="page-title-content-inner">{{__('menu.job')}}</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->

<!-- main content -->
<section class="flat-blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="166" data-mobile="0" data-smobile="0">
                </div>
            </div>
            <div class="col-md-8">
                <div class="post-wrap">
                    <div class="content-blog-detail">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image-box">
                                    <div class="image">
                                        <img src="{{ asset('JobPicture')}}/{{$job->image}}" alt="image"
                                            style="width: 600px; height: 400px;object-fit: cover; border-radius: 20px;box-shadow: -8px -1px 20px #b4b4b42e;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <h2 style="color: rgb(114, 112, 112); margin-top: 10px;font-size: 16pt;">
                                   {{ $job->{'title_'.app()->getLocale()} }}
                                </h2>

                                <span><a href="#" class="user">
                                       {{$job->jobsuser->name}}
                                    </a>
                                    <a href="#" class="date">
                                        {{$job->created_at->format('d-M-Y')}}
                                    </a>
                                </span>
                                <br>

                                <a href="{{ route('applyjob',[$job->id])}}" class="mg-top-15 f-left">
                                    <button style="color: #fff; border-radius: 10px;">{{__('globle.apply')}} {{__('menu.job')}}
                                    </button>
                                </a>

                            </div>
                        </div>

                        <div class="content mg-top-15">


                            <div class="content-note-author">
                                <a href="#" class="author heading-16px-rubik">
                                    {{__('globle.Description')}}
                                </a>

                                <p class="desc-content-box text-decs">
                                    <a>
                                        {!! $job->{'description_'.app()->getLocale()} !!}
                                    </a>
                                    
                                </p>

                            </div>

                            <div class="content-note-author">
                                <a href="#" class="author heading-16px-rubik">
                                    {{__('globle.Requirement')}}
                                </a>

                                <p class="desc-content-box text-decs">
                                    <a>
                                        {!! $job->{'requirement_'.app()->getLocale()} !!}
                                    </a>
                                    
                                    
                                </p>

                            </div>





                            <hr>
                            <div class="bottom-content">


                                <div class="related-tag" style="color: black;">
                                    <h3 class="title heading-16px-rubik">How to Apply :</h3>


                                    <p>1. Apply for a job by clicking the button ' <a style="color: red;"
                                            href="#">apply for this job </a> ' to create CV online. </p>
                                    <p>2. After create your CV, employers will review your CV online, Increase
                                        your job opportunities.</p>
                                    <p>3. Please click <a style="color: red;" href="#">button apply for this job
                                        </a></p>

                                    </ul>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.post-wrap -->

            </div>
            <!-- /.col-md-8 -->

            <!-- /.col-md-8 -->

            
            <div class="col-md-4">
                <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="60" data-smobile="60">
                </div>
                <div class="side-bar">
                    {{-- <div class="widgets-search">
                        <h3 class="widgets-side-bar-title">
                            {{__('globle.search')}}
                        </h3>
                        <div class="widgets-input">
                            <form method="get" role="search" class="search-form">
                                <input type="search" class="search-field" placeholder="{{__('globle.search')}} {{__('globle.here')}}" value=""
                                    name="s" title="Search for">
                                <button class="search-submit" type="submit" title="Search"></button>
                            </form>
                        </div>
                    </div> --}}
                    <div class="widgets-category">
                        <h3 class="widgets-side-bar-title">
                            {{__('globle.categories')}} {{__('menu.job')}}
                        </h3>
                        <ul class="list-category">
                            @foreach(App\Models\JobType::all() as $jobtype)
                            <a href="{{ url('job-category/'.$jobtype->title_en )}}">
                                <li>{{ $jobtype->{'title_'.app()->getLocale()} }}</li>
                            </a>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div class="widget widget_Job">
                        <h2 class="widgets-side-bar-title"><span>{{__('globle.recent-job')}}</span></h2>
                        <ul class="lastest-posts data-effect clearfix">
                            @foreach($latestjobs as $latestjob)
                            <li class="clearfix">
                                <div class="thumb data-effect-item has-effect-icon">
                                    <a href="{{ route('detailjob',[$latestjob->id])}}">
                                         <img src="{{ asset('JobPicture')}}/{{$latestjob->image}}" alt="Image">
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a href="{{ route('detailjob',[$latestjob->id])}}" class="title-thumb">{{ $latestjob->{'title_'.app()->getLocale()} }}</a></h3>
                            <a href="#" class="date">{{ $latestjob->created_at->format('Y-m-d')}}</a>
                                </div>
                            </li> 
                            @endforeach
                           
                            
                        </ul>
                    </div>
                    <!-- /.widget_lastest -->
                    <div class="widgets-contact-info">
                        <div class="contact-info-img">
                            <img src="{{ asset('template/images/promotions/photo_2021-11-11_16-21-38.jpg')}}" alt="image" style="border-radius: 15px 15px 0  0 ;">
                        </div>
                        <div class="contact-info-box">
                            <div class="contact-info-content">
                                <div class="call-us">
                                    <div class="icon-call-us"></div>
                                    <div class="content-call-us">
                                        <h4 class="heading-16px-rubik">Call Us</h4>
                                        <h4 class="heading-16px-rubik">087 81 82 15</h4>
                                    </div>
                                </div>
                                <div class="our-mail">
                                    <div class="icon-our-mail"></div>
                                    <div class="content-our-mail">
                                        <h4 class="heading-16px-rubik">Mail</h4>
                                        <h4 class="heading-16px-rubik">bmimfi@borribo.com.kh</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
            <!-- /.col-md-4 -->
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="193" data-mobile="60" data-smobile="60">
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main-content -->

@endsection