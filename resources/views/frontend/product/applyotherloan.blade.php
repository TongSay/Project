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

                            {{__('globle.apply')}} {{__('menu.product')}}

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
                    <form action="{{ route('applyotherloanid.storeapplyotherloan')}}" method="POST"
                        enctype="multipart/form-data" class="form-contact-right"> @csrf
                        <div class="input-row">
                            <div class="input-name">
                                <label for="message" class="heading-features"> {{__('globle.form.choose')}}
                                    {{__('sidebar.loan')}} <strong style="color: red;">*</strong></label>
                                <select class="input-contact input-select" name="id_loan" id="services" required="">

                                    <option disabled="disabled">{{__('globle.form.choose')}} {{__('sidebar.loan')}}
                                    </option>

                                    @foreach(App\Models\Loan::all() as $loan)
                                    <option value="{{$loan->id}}">{{ $loan->{'title_'.app()->getLocale()} }}</option>
                                    @endforeach




                                </select>
                            </div>

                            <div class="input-services">
                                <label for="message" class="heading-features"> {{__('globle.form.LoanPurpose')}}
                                </label>
                                <input type="text" name="loan_purpose" class="input-contact">
                            </div>

                        </div>

                        <div class="input-row">
                            <div class="input-name">
                                <label for="message" class="heading-features"> {{__('globle.form.amount')}} <strong
                                        style="color: red;">*</strong></label>
                                <input type="number" ​ name="amount" class="input-contact" required>
                            </div>
                            <div class="input-services">

                            </div>

                        </div>

                        <div class="input-row">
                            <div class="input-name">
                                <label for="name" class="heading-features"> {{__('globle.form.name')}} <strong
                                        style="color: red;">*</strong></label>
                                <input id="name" name="name" class="input-contact" type="text" required>
                            </div>
                            <div class="input-services">
                                <label for="services" class="heading-features"> {{__('globle.form.gender')}} <strong
                                        style="color: red;">*</strong></label>
                                <select class="input-contact input-select" name="gender" id="services">

                                    <option disabled="disabled">Choose</option>

                                    @foreach(App\Models\Gender::all() as $gender)
                                    <option value="{{$gender->id}}">{{ $gender->name }}</option>
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
                                <label for="services" class="heading-features"> {{__('globle.form.phone')}} <strong
                                        style="color: red;">*</strong></label>
                                <input type="number" name="phone" class="input-contact" required maxlength="10">
                            </div>
                        </div>
                        <div class="input-row">


                            {{-- <div class="input-message">
                                <label for="message" class="heading-features"> {{__('globle.form.current_address')}}
                                    <strong style="color: red;">*</strong></label>
                                <input type="text" name="pob" class="input-contact" placeholder="#123, St.123,..."
                                    required>
                            </div> --}}




                            <div class="input-email">
                                <label for="message" class="heading-features"> {{__('globle.form.current_address')}}
                                    <strong style="color: red;">*</strong></label>
                                <select id="country" name="pob" class="input-contact input-select">
                                    <option value="" selected disabled>Select City</option>
                                    @foreach ( $countries as $key=>$country){
                                    <option value="{{$key}}">

                                        {{-- {{ $country[0]->vallage }} --}}
                                        {{ $country[0]->province }}


                                    </option> }
                                    @endforeach
                                </select>
                            </div>



                            {{-- <div class="input-services">
                                <label for="message" class="heading-features"> {{__('globle.form.District')}} <strong
                                        style="color: red;">*</strong></label>
                                <select name="state" id="state" class="input-contact input-select"></select>
                            </div>

                            <div class="input-services">
                                <label for="message" class="heading-features"> {{__('globle.form.Commune')}} <strong
                                        style="color: red;">*</strong></label>
                                <select name="city" id="city" class="input-contact input-select"></select>
                            </div>

                            <div class="input-services">
                                <label for="message" class="heading-features"> {{__('globle.form.village')}} <strong
                                        style="color: red;">*</strong></label>
                                <select name="city" id="city" class="input-contact input-select"></select>
                            </div> --}}




                            {{-- <div class="form-group">
                                <label for="city">Commune:</label>
                                <select name="city" id="city" class="form-control"></select>
                            </div> --}}

                            <script type=text/javascript>
                                $('#country').change(function(){
                            var countryID = $(this).val();  
                            if(countryID){
                              $.ajax({
                                type:"GET",
                                url:"{{url('getState')}}?country_id="+countryID,
                                success:function(res){        
                                if(res){
                                  $("#state").empty();
                                  $("#state").append('<option>Select State</option>');
                                  $.each(res,function(key,value){
                                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                                  });
                                
                                }else{
                                  $("#state").empty();
                                }
                                }
                              });
                            }else{
                              $("#state").empty();
                              $("#city").empty();
                            }   
                            });
                            $('#state').on('change',function(){
                            var stateID = $(this).val();  
                            if(stateID){
                              $.ajax({
                                type:"GET",
                                url:"{{url('getCity')}}?state_id="+stateID,
                                success:function(res){        
                                if(res){
                                  $("#city").empty();
                                  $("#city").append('<option>Select City</option>');
                                  $.each(res,function(key,value){
                                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                                  });
                                
                                }else{
                                  $("#city").empty();
                                }
                                }
                              });
                            }else{
                              $("#city").empty();
                            }
                              
                            });
                            </script>


                        </div>




                        <div class="input-message">
                            <label for="message" class="heading-features"> {{__('globle.form.message')}} </label>
                            <textarea name="message" class="input-contact-message" id="message"></textarea>
                        </div>


                        <div class="input-row">

                            <div class="input-email">
                                <label id="email" class="heading-features">{{__('globle.form.upload')}}
                                    {{__('globle.form.nidc')}} <strong style="color: red;">*</strong>
                                </label>
                                <input type="file" name="national_card" class="input-contact form-control" required>
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