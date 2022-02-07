@extends('layouts.master')

@section('content')


<title>{{$title}}</title>

 <!-- Desktop Slide -->
 <div class="Slide">
    <!-- slider -->
    <div class="container-fluid">
        <div class="row">
            <!-- Full-width images with number and caption text -->
            <div class="carousel-containerSlider">
                <div class="mySlides animate">
                    <img src="{{ asset('template/images/slide/slide1.jpg')}}" alt="slide1" />

                </div>

                <div class="mySlides animate">
                    <img src="{{ asset('template/images/slide/slide2.jpg')}}" alt="slide" />

                </div>

                <div class="mySlides animate">
                    <img src="{{ asset('template/images/slide/slide3.jpg')}}" alt="slide" />

                </div>

                <div class="mySlides animate">
                    <img src="{{ asset('template/images/slide/slide4.jpg')}}" alt="slide" />

                </div>

                <div class="mySlides animate">
                    <img src="{{ asset('template/images/slide/slide5.jpg')}}" alt="slide" />

                </div>

                <div class="mySlides animate">
                    <img src="{{ asset('template/images/slide/slide6.jpg')}}" alt="slide" />

                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="prevSlide()">&#10094;</a>
                <a class="next" onclick="nextSlide()">&#10095;</a>

                <!-- The dots/circles -->
                <div class="dots-container">
                    <span class="dots" onclick="currentSlide(1)"></span>
                    <span class="dots" onclick="currentSlide(2)"></span>
                    <span class="dots" onclick="currentSlide(3)"></span>
                    <span class="dots" onclick="currentSlide(4)"></span>
                    <span class="dots" onclick="currentSlide(5)"></span>
                    <span class="dots" onclick="currentSlide(6)"></span>
                </div>
            </div>
        </div>

    </div>
    <!-- .slider -->


</div>
<!-- /.Desktop Slide -->





<!-- Tex Run header -->
<div>
    <div class="container">
        <div class="row">
            <strong>
                <marquee style="color: #929292; padding: 10px;" behavior="scroll" direction="left">{{__('globle.textrun')}}
                </marquee>

            </strong>


        </div>


    </div>
</div>
</div>
<!-- /. Text Run -->




</div>
<!-- /.page-title -->


<!-- about home2 -->
<section>
<div class="container">
    <div class="row">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0">
                    </div>
                    <div class="about-content-left themesflat-counter">

                        <h2 class="section-title">{{__('globle.Welcome_to')}} {{__('globle.borribo')}}</h2>
                        <p class="section-desc">{{__('globle.welcome')}}</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="20" data-smobile="20">
                    </div>


                    <img src="{{ asset('template/images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="images"
                        style="border-radius: 20px;box-shadow: -8px -1px 20px #b4b4b42e;">


                    <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20"
                        data-smobile="20"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<!-- Our services -->
<section class="flat-why-choose-us">
     

    <div class="container">
        <div class="row">

            
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix">
                </div>
                <div class="section-title-box">

                    <h2 class="section-title">{{__('menu.product')}}</h2>
                </div>
                <hr style="border: 2px solid green;
                border-radius: 5px;">
                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="50" data-smobile="50">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                    
            
                @foreach($loans as $loan)
                <a href="{{route('details',[$loan->id])}}">
                    <div class="item-three-column mg-bottom-25 wow fadeInLeft">
                    
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="{{ asset('LoanPicture')}}/{{$loan->image}}" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon"></span>
                                <div class="content-features">
                                    
                                        <h3 class="section-heading-rubik-size20">{{ $loan->{'title_'.app()->getLocale()} }}</h3>
                                    
                                    <h6 class="section-desc">{{ Str::limit($loan->{'description_'.app()->getLocale()}, 60) }}</h6>
                                </div>
                            </div>
                            
                        </article>
                    </div>
                </a> 
                @endforeach
                
                
            </div>
        </div>
    </div>

  
</section>
<!-- / Our service -->


<div class="container">
<div class="row">
    <div class="col-md-12">
      
            <div class="button-show mg-top-40">
                <a href="{{route('product')}}" class="button-style-2 btn-2">{{__('globle.show-more')}}</a>
            </div>
       
        
    </div>

</div>
</div>




<!-- news home2 -->
<section class="flat-news-home2">

 
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div class="section-title-box">
                        <h2 class="section-title">{{__('menu.news')}}</h2>
                    </div>
        
                </div>
        
        
            </div>
            <hr style="border: 3px solid green;
            border-radius: 5px;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="50" data-smobile="50">
                    </div>
        
                    <div class="owl-carousel owl-theme author-carousel wow fadeInUp">
                        @foreach($news as $new)
                        <div class="item">
                            <article class="flat-news-box grow-up-hover">
                                <div class="news-image bd-radius-8">
                                    <img src="{{ asset('NewsPicture')}}/{{$new->image}}" class="grow-up-hover" alt="images" style="width: 100%; height: 350px; object-fit: cover; border-radius: 15px 15px 0  0 ;">
                                </div>
                                <div class="news-content-box bd-radius-8">
                                    <a href="{{route('detail',[$new->id])}}" class="section-heading-rubik-size20 fw-500">{{  Str::limit($new->{'title_'.app()->getLocale()}, 70) }}</a>
                                    <ul class="mg-top-15 mg-bottom5 d-flex">
                                        <li><a href="#" class="user section-heading-rubik-size12">BY
                                            {{ $new->newsuser->name }}</a></li>
                                        <li><a href="blog.html" class="folder section-heading-rubik-size12">{{ $new->created_at->format('d-m-Y')}}</a></li>
                                    </ul>
        
                                    <div class="news-read-more link-style2 mg-top-15">
                                        <a href="{{route('detail',[$new->id])}}" class="news-rm section-heading-rubik-size16">{{__('globle.read-more')}}</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
        
                </div>
        
            </div>
        
        
        </div>
 



</section>
<!-- /news -->
<div class="container">
<div class="row">
    <div class="col-md-12">
      
            <div class="button-show mg-top-40">
                <a href="{{route('news')}}" class="button-style-2 btn-2">{{__('globle.show-more')}}</a>
            </div>
       
        
    </div>

</div>
</div>




<!-- Business Partner -->
<section>
<div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title-box">
                <h2 class="section-title">{{__('globle.partner')}} </h2>
            </div>
        </div>

    </div>
    <hr style="border: 3px solid green;
    border-radius: 5px;">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="sliderPartner">
                <div class="slide-trackPartner">
                    <div class="slidePartner">
                        <img src="{{ asset('template/mages/partner/160x110_160x110_CMA.png')}}i" alt="" />
                    </div>
                    <div class="slidePartner">
                        <img src="{{ asset('template/images/partner/160x110_Alpha.png')}}" alt="" />
                    </div>
                    <div class="slidePartner">
                        <img src="{{ asset('template/images/partner/160x110_ETS.png')}}" alt="" />
                    </div>
                    <div class="slidePartner">
                        <img src="{{ asset('template/images/partner/160x110_Logo_full_color_Option1.jpg')}}" alt="" />
                    </div>
                    <div class="slidePartner">
                        <img src="{{ asset('template/images/partner/160x110_NBC.png')}}" alt="" />
                    </div>
                    <div class="slidePartner">
                        <img src="{{ asset('template/images/partner/160x110_Untitled-1 (1).png')}}" alt="" />
                    </div>
                    <div class="slidePartner">
                        <img src="{{ asset('template/images/partner/160x110_Untitled-1.png')}}" alt="" />
                    </div>
                    <div class="slidePartner">
                        <img src="{{ asset('template/images/partner/160x110_Wing.png')}}" alt="" />
                    </div>
                   
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

</section>
<!-- /Testimonials -->

<br><br>

<!-- flat-testimonials-home2 -->

<!-- flat-testimonials-home2 -->
<section class="flat-features">
<div class="container">
    <div class="row">
        <div class="col-md-4">

            <div class="col-md-12">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">

                        <div class="content-features">
                            <center>
                                <a href="{{ route('contact')}}">
                                    <div class="row">

                                        <img src="{{ asset('template/icon/contact_img.png')}}" alt="">

                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-12">

                                            <h3 class="section-heading-rubik-size20">
                                                {{__('menu.contact')}}
                                            </h3>
                                            <p class="section-desc">

                                                023 222 119, 023 222 090,087 838 688<br>
                                                Email: bmimfi@borribo.com.kh <br>



                                            </p>

                                        </div>
                                </a>
                        </div>
                        </center>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('job')}}">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <img class="tf-icon" src="{{ asset('template/icon/job.png')}}" alt="">
                        <div class="content-features">
                            
                                <div class="section-desc">
                                    <h3 class="section-heading-rubik-size20">
                                        {{__('globle.apply')}} {{__('sidebar.Job')}}
                                    </h3>
                                </div>

                            

                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-md-4">
                <a href="https://www.google.com/maps/search/Borribo+Microfinance+/@11.5312568,104.8738324,12z/data=!3m1!4b1" target="_blank">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <img class="tf-icon" src="{{ asset('template/icon/map.png')}}" alt="">
                        <div class="content-features">
                            <div class="section-desc">
                                
                                    <h3 class="section-heading-rubik-size20">
                                        {{__('globle.map')}}
                                    </h3>
                               
                            </div>


                        </div>
                    </div>
                </div>
             </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <img class="tf-icon" src="{{ asset('template/icon/calculator.png')}}" alt="">
                        <div class="content-features">
                            
                            <div class="section-desc">
                                <h3 class="section-heading-rubik-size20">
                                    {{__('globle.calculator')}}
                                </h3>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
            </div>

        </div> <br>
        <div class="row">
            <div class="item-three-column">
                <a href="{{ route('applyotherloan')}}">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <img class="tf-icon" src="{{ asset('template/icon/applyloan.png')}}" alt="">
                        <div class="content-features">
                            
                                <div class="section-desc">
                                    <h3 class="section-heading-rubik-size20">
                                        {{__('globle.apply')}}​ {{__('sidebar.loan')}}
                                    </h3>
                                </div>

                           

                        </div>
                    </div>
                </div>
             </a>
            </div>
            <div class=" item-three-column">
                <a href="#">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <img class="tf-icon" src="{{ asset('template/icon/promotion.png')}}" alt="">
                        <div class="content-features">

                            <div class="section-desc">
                                <h3 class="section-heading-rubik-size20">
                                    {{__('globle.promotion')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
             </a>
            </div>
            <div class="item-three-column">
                <a href="{{ route('applycompliant') }}">
                <div class="inner-features hover-up wow fadeInUp">
                    <div class="features-box">
                        <img class="tf-icon" src="{{ asset('template/icon/compliant.png')}}" alt="">
                        <div class="content-features">
                            <div class="section-desc">
                                <h3 class="section-heading-rubik-size20">
                                    {{__('globle.compliant')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

        </div>
    </div>

</div>

</div>

<br><br>
</section>
<!-- /features -->



@endsection