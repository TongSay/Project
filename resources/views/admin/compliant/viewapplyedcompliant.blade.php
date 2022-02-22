@extends('admin.partails.master')

@section('content')

@if (Session::has('message'))
<div class="alert alert-success">
    {{ Session::get('message') }}
</div>

@endif
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('applyed-compliant') }}">{{ __('globle.Action.Back') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('globle.compliant') }}</li>
    </ol>
</nav>




<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> {{ __('globle.compliant') }}</li>
                    </ol>
                </h4>

              

                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <div class="form-group">
                                <center>

                                    <br>
                                    <button type="button" class="btn btn-second" data-toggle="modal"
                                        data-target="#exampleModal">

                                        <img src="{{ asset('CV') }}/cv.jpg" alt="My Profile" id="output"
                                            style="width: 220px; height: 150px; object-fit: cover; border-radius: 15px;" />

                                        <br>


                                        <p>View Documents</p>
                                    </button>
                                </center>

                            </div>
                        </div>





                        <!--Bootstrap modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <!-- Modal heading -->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Documentation
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                ×
                                            </span>
                                        </button>
                                    </div>

                                    <!-- Modal body with image -->
                                    <div class="modal-body">
                                        
                                        @foreach ($files as $file )

                                        @if($file->id_compliant == $viewapplyedcompliant->id)

                                            <div class="col-lg-4 col-sm-4">
                                                <a href="{{ asset('FileCompliant') }}/{{ $file->filename }}"
                                                download="{{ $file->filename }}">
                                                <img src="{{ asset('FileCompliant') }}/{{ $file->filename }}" alt="My Profile" id="output"
                                                    style="width: 150px; height: 150px; object-fit: cover; border-radius: 15px; box-shadow: 5px 5px 25px gray" />
                                                </a>

                                            </div>
                                            
                                            <br>
                                        @endif
                                        
                                            
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-8 col-sm-8">
                            <div class="row">
                                <div class="col-lg-6">

                                    {{-- ====== First Name ======= --}}
                                    <div class="form-group">
                                        <label for="name">{{ __('globle.form.name') }}</label>
                                        <input disabled class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ $viewapplyedcompliant->name }}" required=""
                                            type="text">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- ====== Jobs ======= --}}
                                    <div class="form-group">
                                        <label for="job">{{ __('globle.Types') }} {{ __('globle.Loans') }}</label>
                                        <input disabled class="form-control @error('job') is-invalid @enderror"
                                            name="job"
                                            value="@if ($viewapplyedcompliant->loantype)
                                            {{ $viewapplyedcompliant->loantype->{'title_' . app()->getLocale()} }}
                                          @else
                                            Unknow 
                                          @endif"
                                            name="job" type="text">

                                        @error('job')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    <div class="form-group">
                                        <label>{{ __('globle.form.date') }}</label>
                                        <input disabled class="form-control @error('dob') is-invalid @enderror"
                                            value="{{ $viewapplyedcompliant->created_at->format('d-M-Y') }}" id="dob" name="dob" type="text">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- ====== dob ======= --}}
                                    <div class="form-group">
                                        <label>{{ __('globle.form.phone') }}</label>
                                        <input disabled class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ $viewapplyedcompliant->phone }}" id="dob" name="phone"
                                            type="phone">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- ====== Role ======= --}}
                                    <div class="form-group">
                                        <label>{{ __('globle.form.email') }}</label>
                                        <input disabled class="form-control @error('email') is-invalid @enderror"
                                            value="{{ $viewapplyedcompliant->email }}" id="email" name="email"
                                            type="text">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            {{-- ====== E-mail ======= --}}
                            <div class="form-group">
                                <label for="designation">{{ __('globle.form.subject') }}</label>
                                <textarea disabled class="form-control" name="message" cols="30" rows="10">
                                                            {{ $viewapplyedcompliant->subject }}
                                                           </textarea>

                                @error('mesaage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-12">
                            {{-- ====== E-mail ======= --}}
                            <div class="form-group">
                                <label for="designation">{{ __('globle.form.ComDes') }}</label>
                                <textarea disabled class="form-control" name="message" cols="30" rows="10">
                                                            {{ $viewapplyedcompliant->compliant_description }}
                                                           </textarea>

                                @error('mesaage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6 d-flex flex-row">

                            <div class="form-group">
                                <label for="name">{{ __('globle.Action.Situation') }}</label> <br>


                                @if ($viewapplyedcompliant->status == null)

                                {{-- ====== Aprovel ===== --}}

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal{{ $viewapplyedcompliant->id }}"
                                    data-whatever="@mdo">Aprove</button>


                                <div class="modal fade" id="exampleModal{{ $viewapplyedcompliant->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Aprovel With
                                                    Message</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('aprove-compliant.aprove',[$viewapplyedcompliant->id]) }}"
                                                    method="POST" enctype="multipart/form-data">@csrf
                                                    {{method_field('PATCH')}}

                                                    <div class="form-group">
                                                        <label for="message-text"
                                                            class="col-form-label">Message:</label>
                                                        <input type="number" name="status" id="status" value="1" hidden>
                                                        <textarea class="form-control" name="message" id="message-text"
                                                            rows="10"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Aprove</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                {{-- ====== Reject ===== --}}

                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#rejectModal{{ $viewapplyedcompliant->id }}"
                                    data-whatever="@mdo">Reject</button>


                                <div class="modal fade" id="rejectModal{{ $viewapplyedcompliant->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Reject With
                                                    Message</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form
                                                    action="{{ route('aprove-compliant.aprove',[$viewapplyedcompliant->id]) }}"
                                                    method="POST" enctype="multipart/form-data">@csrf
                                                    {{method_field('PATCH')}}

                                                    <div class="form-group">
                                                        <label for="message-text"
                                                            class="col-form-label">Message:</label>
                                                        <input type="number" name="status" id="status" value="2" hidden>
                                                        <textarea class="form-control" name="message" id="message-text"
                                                            rows="10"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-danger">Reject</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                @elseif ($viewapplyedcompliant->status == 1)
                                <button disabled type="button" class="btn btn-success">

                                    <span class="link-title">Aproved</span>

                                </button>


                                <button type="button" class="btn btn-second" data-toggle="modal"
                                    data-target="#exampleModal{{ $viewapplyedcompliant->id }}" data-whatever="@mdo">
                                    <i class="link-icon" data-feather="mail"></i></button>


                                <div class="modal fade" id="exampleModal{{ $viewapplyedcompliant->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Aproved With
                                                    Message</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>

                                                    <div class="form-group">
                                                        <label for="message-text"
                                                            class="col-form-label">Message:</label>
                                                        <textarea disabled class="form-control" name="message"
                                                            id="message-text"
                                                            rows="10">{{ $viewapplyedcompliant->message }}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>

                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @elseif ($viewapplyedcompliant->status == 2)
                                <button disabled type="button" class="btn btn-danger">

                                    <span class="link-title">Rejected</span>

                                </button>
                                <button type="button" class="btn btn-second" data-toggle="modal"
                                    data-target="#exampleModal{{ $viewapplyedcompliant->id }}" data-whatever="@mdo">
                                    <i class="link-icon" data-feather="mail"></i></button>


                                <div class="modal fade" id="exampleModal{{ $viewapplyedcompliant->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> Rejected With
                                                    Message</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>

                                                    <div class="form-group">
                                                        <label for="message-text"
                                                            class="col-form-label">Message:</label>
                                                        <textarea disabled class="form-control" name="message"
                                                            id="message-text"
                                                            rows="10">{{ $viewapplyedcompliant->message }}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>

                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                </td>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6  d-flex flex-row-reverse">
                            <div class="form-group">
                                <label for="name">{{ __('globle.Action.Print') }}</label> <br>
                                <fieldset>


                                    <input class="btn btn-primary" type="button" value="Print">
                                </fieldset>

                            </div>

                        </div>
                    </div>



                    <script>
                        function print_this(elem) {
  document.body.classList.add('print-element')
  elem.classList.add('print')
  window.print()
  document.body.classList.remove('print-element')
  elem.classList.remove('print')
}

document.querySelectorAll('fieldset').forEach(elem => 
  elem.onclick = () => print_this(elem))
                    </script>
                
            </div>
        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">

    </div>
</div>

@endsection