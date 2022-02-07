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
            <li class="breadcrumb-item active" aria-current="page">{{__('globle.Action.Edit')}} {{__('sidebar.Roles')}}</li>
        </ol>
</nav>

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{__('globle.Action.Create')}} {{__('sidebar.Department')}}</li>
                    </ol></h4>
                    
                    <form class="cmxform" action="{{route('roles.update',[$role->id])}}" method="POST">@csrf
                        {{method_field('PATCH')}}
                        <fieldset>
                            <div class="form-group">
                                <label for="name">{{__('globle.Name')}}</label>
                                <input id="name" class="form-control @error('name') is-invalid @enderror"id="name" name="name" type="text" value="{{$role->name}}">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">{{__('globle.Description')}}</label>
                                <textarea class="form-control" name="description" id="description" rows="10">{{$role->description}}</textarea>
                            </div>
                            @if (isset(auth()->user()->role->permission['name']['role']['can-edit']))
                            
                            <input class="btn btn-warning" type="submit" value="{{__('globle.Action.Update')}}">

                            @endif
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            
        </div>
    </div>



{{-- <main id="content" class="bg-gray-01">
    
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
        
        <div class="text-left mb-5">
            <a href="{{route('role.index')}}">
                <button class="btn btn-lg btn-primary next-button"><i class="fal fa-long-arrow-left"></i> {{__('globle.Action.Back')}}
                    <span class="d-inline-block ml-2 fs-16"></span>
                </button>
            
           </a> 
        </div>

            @if (Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
                
            @endif
        

       
        
        <div class="card mb-5">
            <div class="card-body p-6">
                <h3
                    class="card-title mb-0 text-heading fs-22 lh-15">
                    {{__('sidebar.Roles')}}</h3>

                    <form action="{{route('role.update',[$role->id])}}" method="POST">@csrf
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label for="name"
                                class="text-heading">{{__('globle.Name')}}
                            </label>
                            <input type="text"
                                class="form-control form-control-md border-0 @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{$role->name}}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group mb-0">
                            <label for="description-01"
                                class="text-heading">{{__('globle.Description')}}</label>
                            <textarea class="form-control border-0"
                                rows="5" name="description"
                                id="description-01">{{$role->description}}</textarea>
                        </div>
                        @if (@isset(auth()->user()->role->permission['name']['role']['can-edit']))
                        <div class="text-left mt-3">
                            <button class="btn btn-lg btn-warning" type="submit">{{__('globle.Action.Update')}}
                                <span class="d-inline-block ml-2 fs-16"></span>
                            </button>
                        </div>
                        @endif
                    </form>
                
                
            </div>
            
        </div>
</main> --}}

@endsection
