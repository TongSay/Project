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
						<li class="breadcrumb-item active" aria-current="page">{{__('globle.Action.Create')}} {{__('sidebar.Permission')}}</li>
					</ol>
			</nav>





            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">{{__('globle.Action.Create')}} {{__('sidebar.Permission')}}</li>
                        </ol></h4>
                        
                        <form action="{{route('permissions.store')}}" method="POST">@csrf

                            <fieldset>
                                <div class="form-group col-lg-6">
                                    <label>{{__('globle.Action.Select')}} {{__('sidebar.Roles')}}</label>
                                    <select class="form-control @error('roles_id') is-invalid @enderror" name="role_id" required="">
                                        @foreach (App\Models\Role::all() as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
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
                                                                        <input type="checkbox" class="form-check-input" name="name[department][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[department][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[department][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[department][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[department][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>



                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Role</td>
                                                           
                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[role][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[role][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[role][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[role][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[role][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Permissions</td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[permission][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[permission][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[permission][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[permission][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[permission][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>User</td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[user][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[user][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[user][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[user][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[user][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td>Loan Types</td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loantype][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loantype][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loantype][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loantype][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loantype][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td>Loans</td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loan][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loan][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loan][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loan][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[loan][can-list]" value="1">
                                                                        
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
                                                                        <input type="checkbox" class="form-check-input" name="name[applyloan][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[applyloan][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            
                                                        </tr>


                                                        <tr>
                                                            <td>News</td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[news][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[news][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[news][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[news][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[news][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td>Reports</td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[report][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[report][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[report][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[report][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[report][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td>Job Types</td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[jobtype][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[jobtype][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[jobtype][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[jobtype][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[jobtype][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td>Jobs</td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[job][can-add]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[job][can-edit]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[job][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[job][can-delete]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[job][can-list]" value="1">
                                                                        
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
                                                                        <input type="checkbox" class="form-check-input" name="name[applyjob][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[applyjob][can-list]" value="1">
                                                                        
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
                                                                        <input type="checkbox" class="form-check-input" name="name[compliant][can-view]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="name[compliant][can-list]" value="1">
                                                                        
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
                                                                        <input type="checkbox" class="form-check-input" name="name[leave][can-list]" value="1">
                                                                        
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <input class="btn btn-primary mt-3" type="submit" value="{{__('globle.Action.Create')}}">
                                        </div>
                                </form>
                      </div>
                    </div>
                            </div>
            </div>


@endsection
