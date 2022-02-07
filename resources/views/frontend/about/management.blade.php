

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
                        {{__('about.management-team')}}
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="{{url("/")}}">{{__('menu.home')}}</a></span><span class="page-title-content-inner"><a class="home" href="{{route('about')}}">{{__('menu.about')}}</a></span><span<span class="page-title-content-inner">{{__('about.management-team')}}</span>
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
                        <li class="active">{{__('about.management-team')}}</li></a>
                        <a href="{{route('organizational')}}">
                        <li>{{__('about.orga-chat')}}</li></a><a href="{{route('license')}}">
                        <li>{{__('about.license')}}</li></a>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-9 mg-top-30">
                <div class="list-team ">

                    <div class="item-three-column ">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Ouk-Torany.jpg')}}" alt="images">
                               
                                </center>

                                
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15"> Ouk Torany
                                </h3>
                                <p class="section-desc-2"> General Manager </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-three-column ">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Meang-Sovan.jpg')}}" alt="images">
                               
                                </center>
                                
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15">Meang Sovan
                                </h3>
                                <p class="section-desc-2"> Deputy General Manager </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-three-column">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Sun-Sokha.jpg')}}" alt="images">
                                </center>
                               
                      
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15"> Sun Sokha
                                </h3>
                                <p class="section-desc-2"> Advisor </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-three-column">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Chhon-Sengon.JPG')}}" alt="images">
                              
                                </center>
                                
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15"> Chhon Sengon
                                </h3>
                                <p class="section-desc-2"> Operation Manager </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-three-column">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Koun-Sothy.jpg')}}" alt="images">
                                </center>
                                
                             
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15"> Koun Sothy
                                </h3>
                                <p class="section-desc-2"> Credit Manager </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-three-column">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Lav-Piseth.jpg')}}" alt="images">
                                </center>
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15"> Lav Piseth
                                </h3>
                                <p class="section-desc-2"> Risk & Control Manager </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-three-column">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Hun-Rina.jpg')}}" alt="images">
                                </center>
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15"> Hun Rina
                                </h3>
                                <p class="section-desc-2"> IT Manager </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-three-column">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Heng-Leakhena.jpg')}}" alt="images">
                                </center>

                               
                              
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15"> Heng
                                    Leakhena </h3>
                                <p class="section-desc-2"> Finance Manager </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-three-column">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Hak-Romdoul.jpg')}}" alt="images">
                                </center>
                                
                               
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15"> Hak Romdoul
                                </h3>
                                <p class="section-desc-2"> Compliance & Operational </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-three-column">
                        <div class="team-box hover-up-style2 wow fadeInUp">
                            <div class="image-staff">
                                <center>
                                    <img src="{{ asset('template/images/about/management-team/Vong-Attravireakkonth.jpg')}}" alt="images">
                                </center>
                                
                             
                            </div>
                            <div class="info-staff">
                                <h3 class="section-heading-rubik-size20 text-pri2-color mg-top-15"> Vong
                                    Attravireakkonth </h3>
                                <p class="section-desc-2"> HR Manager </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="0">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection