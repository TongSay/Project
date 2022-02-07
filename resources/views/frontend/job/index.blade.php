

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
    <section class="flat-blog-standard">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>
                </div>
                <div class="col-md-8">
                    <div class="post-wrap">

                        <article class="article-1">
                            <div class="widget widget_Job">
                                <h2 class="widgets-side-bar-title"><span>{{__('menu.job')}} {{__('globle.listing')}}</span></h2>
                                <ul class="lastest-posts data-effect clearfix">

                                    @foreach($jobs as $job)
                                    <li class="clearfix">
                                        <div class="col-md-4 col-sm-12">
                                            <a href="{{ route('detailjob',[$job->id])}}">
                                                <img src="{{ asset('JobPicture')}}/{{$job->image}}" alt="Image"
                                                    style=" width: 100%; height: 180px; margin-top: 10px; object-fit: cover; border-radius: 5px;"></a>

                                        </div>



                                        <div class="col-md-5 col-sm-12">
                                            <div class="text-decs">
                                                <a href="{{ route('detailjob',[$job->id])}}">
                                                    {{ Str::limit($job->{'title_'.app()->getLocale()}, 60) }}
                                                </a>
                                                <br>
                                                <a class="user" href="">
                                                    
                                                    {{$job->jobsuser->name}}
                                                </a>
                                                <br>
                                                <a class="calendar">

                                                    {{$job->created_at->format('d-M-Y')}}
                                                   
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12 mg-top-20 ">

                                            <a href="{{ route('applyjob',[$job->id])}}" class="mg-bottom-20 mg-left-15 f-right">
                                                <button style="color: #fff; border-radius: 10px;">Apply Now
                                                </button>
                                            </a>

                                            <a href="{{ route('detailjob',[$job->id])}}" class="f-right">
                                                <button style="color: #fff; border-radius: 10px; ">
                                                    Detail Job
                                                </button>
                                            </a>
                                        </div>



                                    </li>
                                    @endforeach
                                    

                                    
                                </ul>
                            </div>
                        </article>
                        

                        <!-- end art1-->

                        <!-- end art1-->
                        <div class="themesflat-pagination clearfix">
                            
                                
                            {{ $jobs->links('vendor.pagination.custom')}}
                                
                            
                        </div>
                        <!-- end pagination-->

                        <!-- end pagination-->
                    </div>
                    <!-- /.post-wrap -->
                </div>
                <!-- /.col-md-8 -->

                <div class="col-md-4">
                    <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="60" data-smobile="60">
                    </div>
                    <div class="side-bar">
                        <div class="widgets-search">
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
                        </div>
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
                                        <h3><a href="{{ route('detailjob',[$latestjob->id])}}" class="title-thumb">{{ Str::limit($latestjob->{'title'.app()->getLocale()}, 70) }}</a></h3>
                                <a href="#" class="date">{{ $latestjob->created_at->format('Y-m-d') }}</a>
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
            </div>
        </div> <!-- /.container -->
    </section><!-- /flat-blog -->




    <!-- btn go top -->
    <div class="button-go-top">
        <a href="#" title="" class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- / btn go top -->

</div>
<!--/.boxed-->
@endsection