@extends('admin.partails.master')

@section('content')



@if (Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
</div>
    
@endif
<nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('roles.index')}}">{{__('globle.Action.Back')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{__('globle.Action.Create')}} {{__('sidebar.Roles')}}</li>
        </ol>
</nav>

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{__('globle.Action.Create')}} {{__('sidebar.Department')}}</li>
                    </ol></h4>
                    
                    <form class="cmxform"  action="{{route('roles.store')}}" method="POST">@csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="name">{{__('globle.Name')}}</label>
                                <input id="name" class="form-control @error('name') is-invalid @enderror"id="name" name="name" type="text">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">{{__('globle.Description')}}</label>
                                <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                            </div>
                            
                            
                            <input class="btn btn-primary" type="submit" value="{{__('globle.Action.Create')}}">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            
        </div>
    </div>

@endsection
