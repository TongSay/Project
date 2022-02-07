@extends('admin.partails.master')

@section('content')

@if (Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
            
        @endif
        <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('permissions.index')}}">{{__('globle.Action.Back')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('globle.Action.Edit')}} {{__('sidebar.Permission')}}</li>
                </ol>
        </nav>



        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{__('globle.Action.Create')}} {{__('sidebar.Permission')}}</li>
                    </ol></h4>
                    
                    <form action="{{route('permissions.update',[$permission->id])}}" method="POST">@csrf
                        {{method_field('PATCH')}}

                        <fieldset>
                            <div class="form-group col-lg-6">
                                <label>{{__('globle.Action.Select')}} {{__('sidebar.Roles')}}</label>
                                <select class="form-control  @error('roles_id') is-invalid @enderror" required="">
                                    <option value="">{{__('globle.Action.Select')}}</option>
                                    @foreach (App\Models\Role::all() as $role)
                                        <option value="{{ $role->id }}" @if($permission->role_id == $role->id)
                                            Selected
                                        @endif>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('roles_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                                    <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Permissions</th>
                                    <th>can-add</th>
                                    <th>can-edit</th>
                                    <th>can-view</th>
                                    <th>can-delete</th>
                                    <th>can-list</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Department</td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[department][can-add]" @if (isset($permission['name']['department']['can-add'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" @if (isset($permission['name']['department']['can-edit'])) checked @endif name="name[department][can-edit]" value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[department][can-view]" @if (isset($permission['name']['department']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[department][can-delete]" @if (isset($permission['name']['department']['can-delete'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[department][can-list]" @if (isset($permission['name']['department']['can-list'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>



                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Role</td>
                                                       
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[role][can-add]" @if (isset($permission['name']['role']['can-add'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[role][can-edit]" @if (isset($permission['name']['role']['can-edit'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[role][can-view]" @if (isset($permission['name']['role']['can-view'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[role][can-delete]" @if (isset($permission['name']['role']['can-delete'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[role][can-list]" @if (isset($permission['name']['role']['can-list'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Permissions</td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[permission][can-add]" @if (isset($permission['name']['permission']['can-add'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[permission][can-edit]" @if (isset($permission['name']['permission']['can-edit'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[permission][can-view]" @if (isset($permission['name']['permission']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[permission][can-delete]" @if (isset($permission['name']['permission']['can-delete'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[permission][can-list]" @if (isset($permission['name']['permission']['can-list'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>User</td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[user][can-add]" @if (isset($permission['name']['user']['can-add'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[user][can-edit]" @if (isset($permission['name']['user']['can-edit'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[user][can-view]" @if (isset($permission['name']['user']['can-view'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[user][can-delete]" @if (isset($permission['name']['user']['can-delete'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[user][can-list]" @if (isset($permission['name']['user']['can-list'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                    </tr>


                                                    <tr>
                                                        <td>Loan Types</td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loantype][can-add]" @if(isset ($permission['name']['loantype']['can-add'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loantype][can-edit]" @if(isset ($permission['name']['loantype']['can-edit'])) checked @endif value="1"> 
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loantype][can-view]" @if(isset ($permission['name']['loantype']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loantype][can-delete]" @if(isset ($permission['name']['loantype']['can-delete'])) checked @endif value="1"> 
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loantype][can-list]" @if(isset ($permission['name']['loantype']['can-list'])) checked @endif value="1"> 
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Loans</td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loan][can-add]" @if(isset ($permission['name']['loan']['can-add'])) checked @endif value="1"> 
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loan][can-edit]" @if(isset ($permission['name']['loan']['can-edit'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loan][can-view]"  @if(isset ($permission['name']['loan']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loan][can-delete]"  @if(isset ($permission['name']['loan']['can-delete'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[loan][can-list]" @if(isset ($permission['name']['loan']['can-list'])) checked @endif value="1">  
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                    </tr>


                                                    <tr>
                                                        <td>Applyed Loans</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[applyloan][can-view]" @if(isset ($permission['name']['applyloan']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[applyloan][can-list]" @if(isset ($permission['name']['applyloan']['can-list'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>


                                                    <tr>
                                                        <td>News</td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[news][can-add]" @if(isset ($permission['name']['news']['can-add'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[news][can-edit]" @if(isset ($permission['name']['news']['can-edit'])) checked @endif value="1"> 
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[news][can-view]" @if(isset ($permission['name']['news']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[news][can-delete]" @if(isset ($permission['name']['news']['can-delete'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[news][can-list]" @if(isset ($permission['name']['news']['can-list'])) checked @endif value="1"> 
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                    </tr>


                                                    <tr>
                                                        <td>Reports</td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[report][can-add]" @if(isset ($permission['name']['report']['can-add'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[report][can-edit]" @if(isset ($permission['name']['report']['can-edit'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[report][can-view]" @if(isset ($permission['name']['report']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[report][can-delete]" @if(isset ($permission['name']['report']['can-delete'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[report][can-list]" @if(isset ($permission['name']['report']['can-list'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Job Types</td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[jobtype][can-add]" @if(isset ($permission['name']['jobtype']['can-add'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[jobtype][can-edit]" @if(isset ($permission['name']['jobtype']['can-edit'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[jobtype][can-view]" @if(isset ($permission['name']['jobtype']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[jobtype][can-delete]" @if(isset ($permission['name']['jobtype']['can-delete'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[jobtype][can-list]" @if(isset ($permission['name']['jobtype']['can-list'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Jobs</td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[job][can-add]" @if(isset ($permission['name']['job']['can-add'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[job][can-edit]" @if(isset ($permission['name']['job']['can-edit'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[job][can-view]" @if(isset ($permission['name']['job']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[job][can-delete]" @if(isset ($permission['name']['job']['can-delete'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[job][can-list]" @if(isset ($permission['name']['job']['can-list'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Applyed Jobs</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[applyjob][can-view]" @if(isset ($permission['name']['applyjob']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[applyjob][can-list]" @if(isset ($permission['name']['applyjob']['can-list'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
            
                                                    <tr>
                                                        <td>Compliants</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[compliant][can-view]" @if(isset ($permission['name']['compliant']['can-view'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[compliant][can-list]" @if(isset ($permission['name']['compliant']['can-list'])) checked @endif value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
            
                                                    
                                                    
                                                    <tr>
                                                        <td>Leave</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="name[leave][can-list]" @if (isset($permission['name']['leave']['can-list'])) checked @endif  value="1">
                                                                    
                                                                </label>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @if (@isset(auth()->user()->role->permission['name']['permission']['can-edit']))
                                            <input class="btn btn-warning mt-3" type="submit" value="{{__('globle.Action.Update')}}">
                                            @endif
                                    </div>
                            </form>
                  </div>
                </div>
                        </div>
        </div>



@endsection
