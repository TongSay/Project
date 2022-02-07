
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
                        <span><a class="home" href="{{ url("/") }}">{{__('menu.home')}}</a></span><span
                            class="page-title-content-inner">{{__('menu.product')}}</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->

<!-- Our services -->
<section class="flat-why-choose-us">
    


     
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60">
                </div>
            </div>
        </div>
        <div class="row">
            
        
   

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
    

        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="100" data-smobile="100">
                </div>
            </div>
        </div>

</section>
<!-- / Our service -->


@endsection
