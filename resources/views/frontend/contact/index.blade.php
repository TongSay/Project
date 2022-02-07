
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
                            {{__('menu.contact')}}
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="{{ url("/") }}">{{__('menu.home')}}</a></span><span
                                class="page-title-content-inner">{{__('menu.contact')}}</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.page-title -->


    <!-- Contact -->
    <section class="flat-contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-5 wow fadeInUp">
                    <div class="contact-left">
                        <!-- <h3 class="section-subtitle mg-bottom-22">GET IN TOUCH</h3> -->
                        <h2 class="section-title mg-bottom-15">{{__('about.borribo-microfinance')}}</h2>
                        <p class="section-desc mg-bottom-60">{{__('about.borribo-microfinance')}} {{__('about.vision-content')}} </p>
                        <a href="{{ route('applyotherloan')}}">

                        <div class="inner-features hover-up wow fadeInUp mg-bottom30">
                            <div class="features-box">
                                <img class="tf-icon" src="{{ asset('template/icon/applyloan.png')}} " alt="">
                                <div class="content-features">
                                    
                                        <div class="section-desc">
                                            <h3 class="section-heading-rubik-size20" style="margin-top: 50px; margin-left: 20px;">
                                                {{__('globle.apply')}}​ {{__('sidebar.loan')}}
                                            </h3>
                                        </div>

                                    

                                </div>
                            </div>
                        </div>
                    </a>
                        
                           <a href="{{ route('job')}}">
                            
                                <div class="inner-features hover-up wow fadeInUp mg-bottom30">
                                    <div class="features-box">
                                        <img class="tf-icon" src="{{ asset('template/icon/job.png')}} " alt="">
                                        <div class="content-features">
                                            
                                                <div class="section-desc">
                                                    <h3 class="section-heading-rubik-size20" style="margin-top: 50px; margin-left: 20px;">
                                                        {{__('globle.apply')}} {{__('sidebar.Job')}}
                                                    </h3>
                                                </div>
        
                                            
        
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inner-features hover-up wow fadeInUp mg-bottom30">
                                    <div class="features-box">
                                        <img class="tf-icon" src="{{ asset('template/icon/promotion.png')}}" alt="">
                                        <div class="content-features">
                                            
                                                <div class="section-desc">
                                                    <h3 class="section-heading-rubik-size20" style="margin-top: 50px; margin-left: 20px;">
                                                        {{__('globle.promotion')}}
                                                    </h3>
                                                </div>
        
                                           
        
                                        </div>
                                    </div>
                                </div> 
                            </a>
                                <a href="{{ route('applycompliant')}}">
                       
                                <div class="inner-features hover-up wow fadeInUp mg-bottom30">
                                    <div class="features-box">
                                        <img class="tf-icon" src="{{ asset('template/icon/compliant.png')}}" alt="">
                                        <div class="content-features">
                                           
                                                <div class="section-desc">
                                                    <h3 class="section-heading-rubik-size20" style="margin-top: 50px; margin-left: 20px;">
                                                        {{__('globle.compliant')}}
                                                    </h3>
                                                </div>
        
                                           
        
                                        </div>
                                    </div>
                                </div>
                         </a>
                        
                        
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30">
                    </div>
                </div>
                <div class="col-md-7 wow fadeInUp">
                    <div class="contact-right">

                        <div class="address-box mg-bottom-15">

                            <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20" style="color:brown;">
                                    {{__('contact.head-office')}}</h3>

                                <hr style="border: 2px solid brown;border-radius: 5px;">

                                <p class="desc-box text-pri2-color "><strong style="color:brown;">{{__('contact.tell')}}: </strong> 023
                                    222 119, 023 222 776, 023 222 090, 087 838 688, 087 818 286</p>

                                <p class="desc-box text-pri2-color "><strong style="color:brown;">{{__('contact.e-mail')}}: </strong>
                                    bmimfi@borribo.com.kh</p>

                                <p class="desc-box text-pri2-color "><strong style="color:brown;">{{__('contact.website')}}: </strong>
                                    www.borribo.com.kh</p>

                                <p class="desc-box text-pri2-color"><strong style="color:brown;">{{__('contact.address')}}: </strong> {{__('contact.head-address')}}</p>



                            </div>
                        </div>

                        <div class="address-box mg-bottom-15">

                            <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20" style="color:brown;">
                                {{__('contact.ta-khmao')}}</h3>

                                <hr style="border: 2px solid brown;border-radius: 5px;">

                                <p class="desc-box text-pri2-color "><strong style="color:brown;">{{__('contact.tell')}}: </strong> 087 82 85 86 - 087 81 82 67</p>

                                <p class="desc-box text-pri2-color"><strong style="color:brown;">{{__('contact.address')}}:</strong> {{__('contact.ta-khmao-address')}}</p>



                            </div>
                        </div>
                        <div class="address-box mg-bottom-15">

                            <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20" style="color:brown;">
                                   {{__('contact.angk-snoul')}}</h3>

                                <hr style="border: 2px solid brown;border-radius: 5px;">

                                <p class="desc-box text-pri2-color "><strong style="color:brown;">{{__('contact.tell')}}: </strong> 087 81 82 18 - 087 81 82 11</p>

                                <p class="desc-box text-pri2-color"><strong style="color:brown;">{{__('contact.address')}}: </strong>
                                    {{__('contact.angk-snoul-address')}}</p>



                            </div>
                        </div>

                        <div class="address-box mg-bottom-15">

                            <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20" style="color:brown;">
                                    {{__('contact.kien-svay')}}</h3>

                                <hr style="border: 2px solid brown;border-radius: 5px;">

                                <p class="desc-box text-pri2-color "><strong style="color:brown;">{{__('contact.tell')}}: </strong> 087 81 83 61 - 087 81 82 68</p>

                                <p class="desc-box text-pri2-color"><strong style="color:brown;">{{__('contact.address')}}: </strong>
                                    {{__('contact.kien-svay-address')}}</p>



                            </div>
                        </div>

                        <div class="address-box mg-bottom-15">

                            <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20" style="color:brown;">
                                    {{__('contact.doun-penh')}}</h3>

                                <hr style="border: 2px solid brown;border-radius: 5px;">

                                <p class="desc-box text-pri2-color "><strong style="color:brown;">{{__('contact.tell')}}: </strong>087 81 82 15</p>

                                <p class="desc-box text-pri2-color"><strong style="color:brown;">{{__('contact.address')}}: </strong>{{__('contact.doun-penh-address')}}</p>



                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Contact -->

    <div class="container-fluid">
        <center>
            <div class="row">
                <div class="col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d62554.01435087379!2d104.93285578394465!3d11.50688708018115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sborribo!5e0!3m2!1sen!2skh!4v1635149858126!5m2!1sen!2skh"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </center>

    </div>
@endsection