@extends('admin.partails.master')

@section('content')



<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">{{__('globle.Welcome_to')}} {{__('sidebar.User')}}</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
      <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
        <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
        <input type="text" class="form-control">
      </div>
      <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
        <i class="btn-icon-prepend" data-feather="download"></i>
        Import
      </button>
      <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
        <i class="btn-icon-prepend" data-feather="printer"></i>
        Print
      </button>
      {{-- <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="btn-icon-prepend" data-feather="download-cloud"></i>
        Download Report
      </button> --}}
    </div>
  </div>

  


  <div class="mb-6">
    <div class="row">
        <div class="col-sm-12 col-md-6 d-flex mb-3">
            
            <div class="align-self-center">
                @if (@isset(auth()->user()->role->permission['name']['user']['can-add'])) 
                <a href="{{route('users.create')}}">

                    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                        <i class="btn-icon-prepend" data-feather="plus-square"></i>
                         {{__('sidebar.User')}}
                      </button>
                   
                </a>
                @endif
            </div>
        </div>
       
            
       
       
    </div>
</div>


  @if (Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
</div>
    
@endif




<div class="table-responsive">

<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        
        
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>{{__('globle.No')}}</th>
                            <th>{{__('globle.Photo')}}</th>
                            <th>{{__('globle.Name')}}</th>
                            <th>{{__('globle.Email')}}</th>
                            {{-- <th class="py-6">Address</th>
                            <th class="py-6">Phone</th> --}}
                            <th>{{__('sidebar.Roles')}}</th>
                            <th>{{__('sidebar.Department')}}</th>
                            <th>{{__('globle.Designation')}}</th>
                            <th>{{__('globle.Start-Date')}}</th>
                            <th>{{__('globle.Action.Action')}}</th>
                        </tr>
              </tr>
            </thead>
            <tbody>
                @if (count($users)>0)
                    @foreach ($users as $key=>$user)
              
              <tr>
                


                <td>{{$user->id}}</td>
                        <td><img src="{{asset ('Profile')}}/{{$user->image}}" alt="" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td class="align-middle">{{$user->name}}</td>
                        <td >{{$user->email}}</td>
                        {{-- <td >{{$user->address}}</td>
                        <td class="align-middle">{{$user->mobile_number}}</td> --}}
                        <td><span class="badge badge-primary">{{$user->role->name}}</span></td>
                        <td >{{$user->department->name}}</td>
                        <td >{{$user->designation}}</td>
                        <td >{{$user->start_from}}</td>




                <td>
    
    
                    @if (@isset(auth()->user()->role->permission['name']['user']['can-edit']))       
                                <a href="{{route('users.edit',[$user->id])}}">
                                    
                                    <i class="link-icon" data-feather="edit"></i>
                                </a>
    
                                     
                    @endif
    
    
                    @if(isset(auth()->user()->role->permission['name']['user']['can-delete'])) 
                                    <!-- Button trigger modal -->
                                    <button type="button"  class="btn btn-link" data-toggle="modal" data-target="#exampleModal{{$user->id}}">
                                        <i class="link-icon text-danger" data-feather="trash"></i>
                                    </button>
                                @endif
    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{route('users.destroy',[$user->id])}}" method="POST"> @csrf
                                                {{method_field('DELETE')}}
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{__('globle.Action.Delete')}} {{__('sidebar.User')}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Do you want to delete
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">{{__('globle.Action.Delete')}}</button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
    
    
                </td>
                
              </tr>
    
              @endforeach
              @else
    
                    <div>No Table to Display</div>
    
                @endif
    
            </tbody>
          </table>
        </div>
      </div>
    </div>
            </div>
            
        </div>

        




   
@endsection
