
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
                        {{__('menu.job')}}
                    </div>
                    <div class="page-title-content link-style6">
                        <span><a class="home" href="{{ url("/") }}">{{__('menu.home')}}</a></span>
                        <span
                            class="page-title-content-inner">
                            <a class="home" href="{{ route('job')}}">
                                {{__('menu.job')}}
                            </a>
                            
                        </span>
                        <span
                            class="page-title-content-inner">
                           
                                {{__('globle.apply')}} {{__('menu.job')}}
                           
                            
                        </span>
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

            @if (Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
                
            @endif

            <div class="col-md-12">
                <div class="contact-right">
                    <form action="{{ route('applyjobid.storeapplyjob',[$job->id])}}" method="POST" class="form-contact-right" enctype="multipart/form-data"> @csrf

                       
                        <div class="input-row">
                            <div class="input-name">
                                <label for="message" class="heading-features"> {{__('globle.form.position')}} <strong style="color: red;">*</strong></label>
                               
                                    
                                    <input type="text" disabled class="input-contact" value="{{ $job->{'title_'.app()->getLocale()} }}">
                               
                            </div>
                            <div class="input-services">
                                <label for="services" class="heading-features"> {{__('globle.form.position')}} {{__('globle.form.other')}}</label>
                                <input type="text" name="other_job" class="input-contact">
                            </div>

                        </div>
                        
                        <div class="input-row">
                            <div class="input-name">
                                <label for="name" class="heading-features">{{__('globle.form.name')}} <strong style="color: red;">*</strong></label>
                                <input id="name" name="name" class="input-contact" type="text" required>
                            </div>
                            <div class="input-services">
                                <label for="services" class="heading-features">{{__('globle.form.gender')}} <strong style="color: red;">*</strong></label>
                                <select class="input-contact input-select" name="gender" id="services">
                                    
                                    @foreach(App\Models\Gender::all() as $gender)
                                    <option value="{{$gender->id}}">{{ $gender->{'title_' . app()->getLocale()} }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="input-row">
                            
                            <div class="input-email">
                                <label id="email" class="heading-features"> {{__('globle.form.email')}}</label>
                                <input type="email" name="email" class="input-contact">
                            </div>
                            <div class="input-services">
                                <label for="services" class="heading-features"> {{__('globle.form.phone')}} <strong style="color: red;">*</strong></label>
                                <input type="number" name="phone" class="input-contact" required maxlength="10">
                            </div>
                        </div>
                        <div class="input-message">
                            <label for="message" class="heading-features"> {{__('globle.form.dob')}} <strong style="color: red;">*</strong></label>
                            <input type="date" name="dob" class="input-contact" required>
                        </div>
                        <div class="input-message">
                            <label for="message" class="heading-features"> {{__('globle.form.current_address')}} <strong style="color: red;">*</strong></label>
                            <input type="text" name="pob" class="input-contact"  required>
                        </div>

                        <div class="input-message">
                            <label for="message" class="heading-features"> {{__('globle.form.message')}}</label>
                            <textarea name="remark" class="input-contact-message" id="message"></textarea>
                        </div>

                        <div class="input-row">
                            
                            
                            <div class="input-services">
                                <label for="services" class="heading-features"> {{__('globle.form.upload')}} {{__('globle.form.nidc')}}  </label>
                                <input type="file" name="photos[]" multiple class="input-contact form-control" >
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit" class=" btn btn-left">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            
            
        </div>
        
    </div>
</section>

@endsection