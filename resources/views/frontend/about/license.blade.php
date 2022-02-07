

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
                            {{__('about.license')}}
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="{{url("/")}}">{{__('menu.home')}}</a></span><span class="page-title-content-inner"><a class="home" href="{{route('about')}}">{{__('menu.about')}}</a></span><span<span class="page-title-content-inner">{{__('about.license')}}</span>
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
                            <li>{{__('about.orga-chat')}}</li></a><a href="{{route('license')}}">
                            <li class="active">{{__('about.license')}}</li></a>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <article class="content-service-details mg-top-30">
                        <h2 class="section-heading-jost-size22 text-pri2-color mg-bottom30">{{__('about.license to conduct mircrofinance business')}}</h2>
                        <div class="post-service-details bd-radius-8-image mg-bottom-45">
                            <img src="{{ asset('template/images/about/license/nvc.jpg')}}" alt="imagess">
                        </div>

                        {{-- <p class="section-desc mg-bottom-20">The National Bank of Cambodia allows Borribo
                            Microfinance Institution PLC to conduct deposit-taking business at building #19, Street
                            371, Phum Thnout Chrom Sangkat Boeung Tumpun, Khan Meanchey, Phnom Penh.
                            Borribo Microfinance Institution PLC. shall abide by the Law on Banking and Financial
                            Institutions and Prakas, regulations, circulars, and conditions issued by the National
                            Bank of Cambodia.</p> --}}

                    </article>


                    <article class="content-service-details mg-top-30">
                        <h2 class="section-heading-jost-size22 text-pri2-color mg-bottom30">{{__('about.certificate of incorporation')}}</h2>
                        <div class="post-service-details bd-radius-8-image mg-bottom-45">
                            <img src="{{ asset('template/images/about/license/incorporation.jpg')}}" alt="imagess">
                        </div>

                        

                    </article>


                    <article class="content-service-details mg-top-30">
                        <h2 class="section-heading-jost-size22 text-pri2-color mg-bottom30">{{__('about.certificate of tax')}}</h2>
                        <div class="post-service-details bd-radius-8-image mg-bottom-45">
                            <img src="{{ asset('template/images/about/license/vat.jpg')}}" alt="imagess">
                        </div>

                        

                    </article>
                </div>
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="60" data-smobile="0">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection