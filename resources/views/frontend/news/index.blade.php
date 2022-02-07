

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
                            {{__('menu.news')}}
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="{{ url("/") }}">{{__('menu.home')}}</a></span><span
                                class="page-title-content-inner">{{__('menu.news')}}</span>
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
                   
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="0" data-smobile="0"></div>
                   
                </div>
                <div class="col-md-8">
                    <div class="post-wrap">
                        <h2 class="widgets-side-bar-title mg-bottom-20"><span> {{__('menu.news')}} {{__('globle.listing')}}</span></h2>
                        <div class="row">

                            @foreach($news as $new)
                            <div class="col-md-6 col-sm-6">
                                
                                <article class="article-2  wow fadeInLeft mg-bottom-20">
                                    
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{ asset('NewsPicture')}}/{{$new->image}}" alt="image" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px 15px 0  0 ;">
                                        </div>
                                        <div class="date-image">
                                            <a class="user" href="" style="color: #ffff;">
                                               {{$new->newsuser->name}}
                                            </a>
                                            &nbsp
                                            <a class="calendar" style="color: #ffff;">
                                                {{$new->created_at->format('Y-m-d')}}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                       
                                        <div class="content-art">
                                            <a href="{{route('detail',[$new->id])}}" class="section-heading-jost-size20">
                                                {{ Str::limit($new->{'title_'.app()->getLocale()}, 70) }}
                                           
                                        </a>
                                            
                                            <div class="link-style2">
                                                <a href="{{route('detail',[$new->id])}}" class="read-more">
                                                {{__('globle.read-more')}}<i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                            </div>
                                        </div>
    
                                    </div>
                                </article>
                                <!-- end art1-->
                            </div>
                            @endforeach
                            
                    </div>
                    
                    {{ $news->links('vendor.pagination.custom')}}
                              
                        
                        <!-- end pagination-->
                    </div>
                    <!-- /.post-wrap -->
                </div>
                <!-- /.col-md-8 -->

                <div class="col-md-4">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                    <div class="side-bar">
                        <div class="widgets-search">
                            <h3 class="widgets-side-bar-title">
                                {{__('globle.search')}}
                            </h3>
                            <div class="widgets-input">
                                <form method="get" role="search" class="search-form">
                                    <input type="search" class="search-field" placeholder="{{__('globle.search')}} {{__('globle.here')}}" value="" name="s" title="Search for">
                                    <button class="search-submit" type="submit" title="Search"></button>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="widgets-category">
                            <h3 class="widgets-side-bar-title">
                               {{__('globle.categories')}} {{__('menu.news')}} 
                            </h3>
                            <ul class="list-category">
                                <a href="#"><li>Tempor lorem interdum</li></a>
                                <a href="#"><li>Auctor mattis lacus </li></a>
                               <a href="#"> <li>Dolor proin</li> </a>
                                <a href="#"><li>Pharetra amet </li></a>
                                <a href="#"><li>Nullam dolor gravida  </li></a>
                            </ul>
                        </div> --}}
                        <div class="widget widget_Job">
                            <h2 class="widgets-side-bar-title"><span>{{__('globle.recent-new')}}</span></h2>
                            <ul class="lastest-posts data-effect clearfix">

                                @foreach($latestnews as $latestnew)
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon">
                                        <img src="{{ asset('NewsPicture')}}/{{$latestnew->image}}" alt="Image">
                                    </div>
                                    <div class="text">
                                        <h3><a href="{{route('detail',[$latestnew->id])}}" class="title-thumb"> {{ Str::limit($latestnew->{'title_'.app()->getLocale()}, 80) }}</a></h3>
                                        <a href="#" class="date">{{$latestnew->created_at->format('s-M-Y')}}</a>
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
        </div>    <!-- /.container -->
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