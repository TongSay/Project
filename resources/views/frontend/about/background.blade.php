
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
                        {{__('about.background')}}
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="{{url("/")}}">{{__('menu.home')}}</a></span><span class="page-title-content-inner"><a class="home" href="{{route('about')}}">{{__('menu.about')}}</a></span><span<span class="page-title-content-inner">{{__('about.background')}}</span>
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
                        <a href="{{route('background')}}">
                        <li class="active">{{__('about.background')}}</li></a>
                        <a href="{{route('management')}}">
                        <li>{{__('about.management-team')}}</li></a>
                        <a href="{{route('organizational')}}">
                        <li>{{__('about.orga-chat')}}</li></a><a href="{{route('license')}}">
                        <li>{{__('about.license')}}</li></a>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <article class="content-service-details mg-top-30">
                    <!-- <div class="post-service-details bd-radius-8-image mg-bottom-45">
                        <img src="images/services/smiley-colleagues-having-meeting-office.jpg" alt="imagess">
                    </div> -->
                    <h2 class="section-heading-title-size22 text-pri2-color mg-bottom-20">{{__('about.background')}}</h2>
                    <p class="section-desc mg-bottom-20">{{__('about.borribo-microfinance')}}  {{__('about.background-content')}}</p>

                    <h2 class="section-heading-jost-size22 text-pri2-color mg-bottom30">{{__('about.vision')}}</h2>
                    <p class="section-desc mg-bottom-40">{{__('about.borribo-microfinance')}} {{__('about.vision-content')}}</p>

                    <h2 class="section-heading-jost-size22 text-pri2-color mg-bottom30">{{__('about.mission')}}</h2>
                    <p class="section-desc">{{__('about.mission-content')}}</p>



                </article>
            </div>
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="60" data-smobile="0"></div>
            </div>
        </div>
    </div>
</section>

@endsection
