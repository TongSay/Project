@extends('admin.partails.master')

@section('content')



@if (Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
</div>

@endif


<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">My Profile</li>
                    </ol>
                </h4>

                <form class="cmxform" action="{{ route('profile.update',[Auth::user()->id])}}" method="POST"
                    enctype="multipart/form-data">@csrf
                    {{method_field('PATCH')}}
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">


                                    <center>
                                        <label for="name">{{__('globle.Photo')}}</label>
                                        <br>

                                        

                                            <img src="{{asset ('Profile')}}/{{Auth::user()->image}}" alt="My Profile" id="output" style="width: 150px; height: 150px; border-radius:50%; object-fit: cover;"/>

                                            <br>

                                        <input type="file" hidden accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                                <label class="btn btn-primary mt-3" for="file" style="cursor: pointer;">Upload Image</label>
                                <p><img id="output" width="200" /></p>

                                        </center>
                                        
                                    <script>
                                        var loadFile = function(event) {
                                                var image = document.getElementById('output');
                                                image.src = URL.createObjectURL(event.target.files[0]);
                                            };
                                    </script>

                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">

                                        {{-- ====== First Name ======= --}}
                                        <div class="form-group">
                                            <label for="name">{{__('globle.Name')}}</label>
                                            <input class="form-control @error('name') is-invalid @enderror" id="name"
                                                name="name" value="{{Auth::user()->name}}" required="" type="text">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-lg-6">



                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== Address ======= --}}
                                        <div class="form-group">
                                            <label for="address">{{__('globle.Address')}}</label>
                                            <input class="form-control @error('address') is-invalid @enderror"
                                                id="address" name="address" value="{{Auth::user()->address}}" type="address">

                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== Phone ======= --}}
                                        <div class="form-group">
                                            <label for="mobile_number">{{__('globle.Phone')}}</label>
                                            <input class="form-control @error('mobile_number') is-invalid @enderror"
                                                id="mobile_number" name="mobile_number" value="{{Auth::user()->mobile_number}}"
                                                type="number">

                                            @error('mobile_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== Department ======= --}}
                                        <div class="form-group">
                                            <label>{{__('globle.Action.Select')}} {{__('sidebar.Roles')}}</label>
                                            <select class="form-control  @error('department_id') is-invalid @enderror"
                                                id="department_id" name="department_id" required="">
                                                @foreach (App\Models\Department::all() as $department)
                                                <option value="{{ Auth::user()->department_id }}" @if (Auth::user()->
                                                    department_id==$department->id)
                                                    Selected
                                                    @endif
                                                    >{{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('department_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== Designation ======= --}}
                                        <div class="form-group">
                                            <label for="designation">{{__('globle.Designation')}}</label>
                                            <input class="form-control @error('designation') is-invalid @enderror"
                                                id="designation" name="designation" value="{{Auth::user()->designation}}"
                                                type="text">

                                            @error('designation')
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
                                            <label>{{__('globle.Action.Select')}} {{__('sidebar.Roles')}}</label>
                                            <select class="form-control  @error('role_id') is-invalid @enderror"
                                                id="department_id" name="role_id" required="">
                                                @foreach (App\Models\Role::all() as $role)
                                                <option value="{{ Auth::user()->role_id }}" @if (Auth::user()->role_id==$role->id)
                                                    selected
                                                    @endif
                                                    >{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('role_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== Start-Date ======= --}}
                                        <div class="form-group">
                                            <label for="name">{{__('globle.Start-Date')}}</label>
                                            <input type="date" class="form-control" id="start_from" name="start_from"
                                                value="{{Auth::user()->start_from}}" required="">

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12">
                                {{-- ====== E-mail ======= --}}
                                <div class="form-group">
                                    <label for="designation">{{__('globle.Email')}}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{Auth::user()->email}}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                {{-- ====== Password ======= --}}
                                <div class="form-group">
                                    <label for="designation">{{__('globle.Password')}}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password" >

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    
                                </div>
                            </div>
                        </div>


                      

                        <input class="btn btn-warning" type="submit" value="{{__('globle.Action.Update')}}">
                      
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">

    </div>
</div>

@endsection