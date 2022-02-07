

@extends('layouts.master')

@section('content')

<title>{{ $title }}</title>
        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="page-title-heading">
                                {{__('menu.about')}}
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="{{ url("/") }}">{{__('menu.home')}}</a></span><span
                                    class="page-title-content-inner">{{__('menu.about')}}</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- about -->
        <section class="flat-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="117" data-mobile="60" data-smobile="60">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-post center">
                            <img class="main-post-about" src="{{ asset('template/images/home/build.jpg')}} " alt="images"
                                style="border-radius: 20px;box-shadow: -8px -1px 20px #b4b4b42e;">
                            <img class="circel-inside" src="{{ asset('template/images/home/circle-about.png')}}" alt="images">
                            <div class="about-count-box themesflat-counter">
                                <div class="box">
                                    <div class="inner-about-count-box">
                                        <span class="number-count number" data-speed="1500" data-to="10"
                                            data-inviewport="yes">10</span>
                                        <div class="caption-number-count">
                                            Years Of experience
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="about-content-title wow fadeInUp">

                                <div class="section-title">{{__('about.borribo-microfinance')}} </div>
                                <div class="section-desc">{{__('about.about')}} </div>
                            </div>
                            <center>
                                <div class="row">



                                    <div class="col-md-6">
                                        <a href="{{ route("background")}}">
                                            <div class="about-desc">
                                                <div class="about-box-nd1 wow fadeInLeft">

                                                    <img src="{{ asset('template/images/home/background.png')}}" alt="images">

                                                    <div class="inner-box">

                                                        <h3 class="section-heading-jost-size20">{{__('about.background')}}</h3>


                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                        <a href="{{route('management')}}">
                                            <div class="about-desc">
                                                <div class="about-box-nd1 wow fadeInLeft">

                                                    <img src="{{ asset('template/images/home/team-chat.png')}}" alt="images">

                                                    <div class="inner-box">

                                                        <h3 class="section-heading-jost-size20">{{__('about.management-team')}}
                                                        </h3>


                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="col-md-6">
                                        <a href="{{route('organizational')}}">

                                            <div class="about-desc">
                                                <div class="about-box-nd1 wow fadeInLeft">

                                                    <img src="{{ asset('template/images/home/orga-chat.png')}}" alt="images">

                                                    <div class="inner-box">

                                                        <h3 class="section-heading-jost-size20">{{__('about.orga-chat')}}</h3>


                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                        <a href="{{route('license')}}">
                                            <div class="about-desc">
                                                <div class="about-box-nd1 wow fadeInLeft">

                                                    <img src="{{ asset('template/images/home/license.png')}}" alt="images">

                                                    <div class="inner-box">

                                                        <h3 class="section-heading-jost-size20">{{__('about.license')}}</h3>


                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </center>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="30" data-smobile="30"></div>
                </div>
            </div>
    </div>
    </section>
    <!-- /about -->

@endsection