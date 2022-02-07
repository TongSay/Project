

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
                                {{__('about.orga-chat')}}
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="{{url("/")}}">{{__('menu.home')}}</a></span><span class="page-title-content-inner"><a class="home" href="{{route('about')}}">{{__('menu.about')}}</a></span><span<span class="page-title-content-inner">{{__('about.orga-chat')}}</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <section class="flat-faq">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widgets-category">
                            <ul class="list-category">
                                <a  href="{{route('background')}}">
                                <li>{{__('about.background')}}</li></a>
                                <a href="{{route('management')}}">
                                <li>{{__('about.management-team')}}</li></a>
                                <a href="{{route('organizational')}}">
                                <li class="active">{{__('about.orga-chat')}}</li></a><a href="{{route('license')}}">
                                <li>{{__('about.license')}}</li></a>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <article class="content-service-details mg-top-30">
                            <div class="post-service-details bd-radius-8-image mg-bottom-45">
                                <img src="{{ asset('template/images/about/organization-chat.png')}} " alt="imagess">
                            </div>
                         </article>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="0"></div>
                    </div>
                </div>
            </div>
        </section>

@endsection