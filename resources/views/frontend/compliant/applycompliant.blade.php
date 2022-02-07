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
                            {{ __('globle.compliant') }}
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="{{ url('/') }}">{{ __('menu.home') }}</a></span>
                            <span class="page-title-content-inner">

                                {{ __('globle.compliant') }}
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
                        {{ Session::get('message') }}
                    </div>
                @endif

                <div class="col-md-12">
                    <div class="contact-right">
                        <form action="{{ route('applycompliant.storecompliant') }}" method="POST"
                            enctype="multipart/form-data" class="form-contact-right"> @csrf


                            <div class="input-row">
                                <div class="input-name">
                                    <label for="name" class="heading-features"> {{ __('globle.form.name') }} <strong
                                            style="color: red;">*</strong></label>
                                    <input id="name" name="name" class="input-contact" type="text" required>
                                </div>
                                <div class="input-services">
                                    <label for="services" class="heading-features"> {{ __('globle.form.choose') }}
                                        {{ __('menu.product') }}
                                        <strong style="color: red;">*</strong></label>
                                    <select class="input-contact input-select" name="id_loan_type" id="services">
                                        @foreach (App\Models\LoanType::all() as $loantype)
                                            <option value="{{ $loantype->id }}">
                                                {{ $loantype->{'title_' . app()->getLocale()} }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="input-row">

                                <div class="input-email">
                                    <label id="email" class="heading-features"> {{ __('globle.form.email') }}</label>
                                    <input type="email" name="email" class="input-contact">
                                </div>
                                <div class="input-services">
                                    <label for="services" class="heading-features"> {{ __('globle.form.phone') }} <strong
                                            style="color: red;">*</strong></label>
                                    <input type="text" name="phone" class="input-contact" required maxlength="10">
                                </div>
                            </div>
                            <div class="input-message">
                                <label for="message" class="heading-features"> {{ __('globle.form.date') }} <strong
                                        style="color: red;">*</strong></label>
                                <input type="date" name="date" class="input-contact" required>
                            </div>

                            <div class="input-message">
                                <label for="message" class="heading-features"> {{ __('globle.form.subject') }} <strong
                                        style="color: red;">*</strong></label>
                                <textarea name="subject" class="input-contact-message" id="message" required></textarea>
                            </div>

                            <div class="input-message">
                                <label for="message" class="heading-features">{{ __('globle.form.ComDes') }} <strong
                                        style="color: red;">*</strong></label>
                                <textarea name="compliant_description" class="input-contact-message" id="message"
                                    required></textarea>
                            </div>


                            <div class="input-row">
                            
                                <div class="input-email">
                                    <label id="email" class="heading-features">{{__('globle.form.upload')}} {{__('globle.form.cv')}}  <strong style="color: red;">*</strong></label>
                                    <input type="file" name="file[]" multiple class="input-contact form-control" required>
                                </div>
                                
                            </div>



                            {{-- <div class="input-row">

                                <div class="input-email">
                                    <label id="email" class="heading-features">{{ __('globle.form.upload') }}
                                        {{ __('globle.form.your') }} {{ __('globle.form.document') }} <strong
                                            style="color: red;">*</strong></label>
                                    <input type="file" 
                            class="filepond"
                            name="file"
                            multiple
                            data-max-file-size="3MB"
                            data-max-files="3" />

                                </div>

                            </div> --}}



                            <div class="button">
                                <button type="submit" class=" btn btn-left">Send message</button>
                            </div>


                           


                        {{-- @section('scripts')
                        <script>
                            FilePond.registerPlugin(
                            
                                // encodes the file as base64 data
                              FilePondPluginFileEncode,
                            
                                // validates the size of the file
                                FilePondPluginFileValidateSize,
                            
                                // corrects mobile image orientation
                                FilePondPluginImageExifOrientation,
                            
                                // previews dropped images
                              FilePondPluginImagePreview
                            );
                            
                            // Select the file input and use create() to turn it into a pond
                            FilePond.create(
                                document.querySelector("input[name='file']")
                            );
                            </script>

                        @endsection --}}
                        {{-- <input type="file" id="avatar" name="file" multiple/> --}}
                    </form>


                </div>
            </div>


        </div>

    </div>
</section>



@endsection
