

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
                        {{__('menu.product')}}
                    </div>
                    <div class="page-title-content link-style6">
                        <span>
                            <a class="home" href="{{ url("/") }}">
                                {{__('menu.home')}}
                            </a>
                        </span>
                        <span class="page-title-content-inner">
                            <a class="home" href="{{ route('product') }}">
                                {{__('menu.product')}}
                            </a>
                        </span>
                        <span class="page-title-content-inner">
                            
                            {{__('globle.detail')}}
                            
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->



<section class="flat-service-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="117" data-mobile="60" data-smobile="60">
                </div>
            </div>
            <div class="col-md-8">
                <article class="content-service-details">
                    <div class="post-service-details bd-radius-8-image mg-bottom-45">
                        <img src="{{ asset('LoanPicture')}}/{{ $loan->image }}" alt="imagess">
                    </div>
                    <h2 class="section-heading-jost-size34 text-pri2-color mg-bottom30">{{ $loan->{'title_'.app()->getLocale()} }}</h2>
                    <p class="section-desc mg-bottom-20">{{ $loan->{'description_'.app()->getLocale()} }}</p>
                    
                    <div class="section-desc mg-bottom-40">{!! $loan->{'content_'.app()->getLocale()} !!}</div>
                </article>
            </div>
            
            <div class="col-md-4">
                <div class="side-bar-services-details mg-bottom30">
                    <div class="widget-nav-tab">
                        <ul class="tab-service link-style5">

                            @foreach($typeloans as $loans)
                                <li><a class="active" href="{{ route('details',[$loans->id]) }}"> {{ $loans->{'title_'.app()->getLocale()} }} </a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="widget-contact-services-details mg-bottom-25">
                    <div class="sidebar-title mg-bottom-25">
                        <h2 class="section-heading-jost-size28 text-pri2-color">{{__('menu.contact')}}</h2>
                    </div>
                    <ul class="widget-sidebar-contact-us text-pri2-color">
                        <li><span class="icon-author">Ceo:</span><span class="info-contact-us">Linko Bunt</span>
                        </li>
                        <li><span class="icon-telephone">{{__('globle.form.phone')}}:</span><span class="info-contact-us">012 345 678
                                9101</span></li>
                       
                        <li><span class="icon-email">E-mail:</span><span
                                class="info-contact-us">yourmail@gmail.com</span></li>
                    </ul>
                </div>
                <div class="services-details-case-studio bd-radius-8">
                     
                    <h2 class="title-case-studio section-heading-jost-size28 text-pri2-color">Apply Loan</h2>
                    <p class="section-desc mg-bottom-43">{{ $loan->{'description_'.app()->getLocale()} }}</p>

                     <div class="button-apply">
                                <a href="{{ route('applyloan',[$loan->id])}}" class="button-style-2 btn-2">{{__('globle.apply')}} {{__('globle.Loans')}}</a>
                            </div>
                             
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30">
                </div>
            </div>
            
        </div>
    </div>
</section>


@endsection