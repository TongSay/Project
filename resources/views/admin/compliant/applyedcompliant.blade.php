@extends('admin.partails.master')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">{{ __('globle.Welcome_to') }} {{ __('globle.compliant') }}</h4>
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


    {{-- <div class="mb-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 d-flex mb-3">
                            
                            <div class="align-self-center">
                                
                                <a href="{{route('jobtypes.create')}}">

                                    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                                        <i class="btn-icon-prepend" data-feather="plus-square"></i> {{__('globle.Types')}} {{__('sidebar.Job')}}
                                      </button>
                                   
                                </a>
                               
                            </div>
                        </div>
                       
                            
                       
                       
                    </div>
                </div> --}}

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
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
                                        <th class="py-6">{{ __('globle.No') }}.</th>
                                        <th class="py-6">{{ __('globle.Types') }} {{ __('sidebar.loan') }}</th>

                                        <th class="py-6">{{ __('globle.Name') }}</th>
                                        <th class="py-6">{{ __('globle.Email') }}</th>
                                        <th class="py-6">{{ __('globle.Phone') }}</th>
                                        {{-- <th class="py-6">{{__('globle.Description')}}</th> --}}

                                        <th class="no-sort py-6">{{ __('globle.Action.Situation') }}</th>
                                        <th class="no-sort py-6">{{ __('globle.Action.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($applycompliants) > 0)
                                        @foreach ($applycompliants as $key => $applycompliant)

                                            @if ($applycompliant->read_at == null)
                                                <tr style="background: rgba(170, 170, 170, 0.658);">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                      @if ($applycompliant->loantype)
                                                        {{ $applycompliant->loantype->{'title_' . app()->getLocale()} }}
                                                      @else
                                                        Unknow 
                                                      @endif
                                                      
                                                    </td>
                                                    <td>{{ $applycompliant->name }}</td>
                                                    <td>
                                                      @if ($applycompliant->email == null)
                                                        No Email to Disply

                                                        @else
                                                        {{ $applycompliant->email }}
                                                      @endif
                                                      </td>
                                                    <td>0{{ $applycompliant->phone }}</td>

                                                    <td>
                                                        @if ($applycompliant->status == null)

                                                      {{-- ====== Aprovel ===== --}}
                                                        
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $applycompliant->id }}" data-whatever="@mdo">Aprove</button>
                                                        
                                                        
                                                        <div class="modal fade" id="exampleModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Aprovel With Message</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form action="{{ route('aprove-compliant.aprove',[$applycompliant->id]) }}" method="POST" enctype="multipart/form-data">@csrf
                                                                  {{method_field('PATCH')}}
                                                                  
                                                                  <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                                    <input type="number"  name="status" id="status" value="1" hidden>
                                                                    <textarea class="form-control" name="message" id="message-text" rows="10"></textarea>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Aprove</button>
                                                                  </div>
                                                                </form>
                                                              </div>
                                                              
                                                            </div>
                                                          </div>
                                                        </div>


                                                        {{-- ====== Reject ===== --}}
                                                        
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#rejectModal{{ $applycompliant->id }}" data-whatever="@mdo">Reject</button>
                                                        
                                                        
                                                        <div class="modal fade" id="rejectModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Reject With Message</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form action="{{ route('aprove-compliant.aprove',[$applycompliant->id]) }}" method="POST" enctype="multipart/form-data">@csrf
                                                                  {{method_field('PATCH')}}
                                                                  
                                                                  <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                                    <input type="number"  name="status" id="status" value="2" hidden>
                                                                    <textarea class="form-control" name="message" id="message-text" rows="10"></textarea>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-danger">Reject</button>
                                                                  </div>
                                                                </form>
                                                              </div>
                                                              
                                                            </div>
                                                          </div>
                                                        </div>


                                                        @elseif ($applycompliant->status == 1)
                                                            <button  disabled type="button" class="btn btn-success">

                                                                <span class="link-title">Aproved</span>

                                                            </button>

                                                              
                                                        <button type="button" class="btn btn-second" data-toggle="modal" data-target="#exampleModal{{ $applycompliant->id }}" data-whatever="@mdo"> <i class="link-icon" data-feather="mail"></i></button>
                                                        
                                                        
                                                        <div class="modal fade" id="exampleModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Aproved With Message</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form>
                                                                  
                                                                  <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                                    <textarea disabled class="form-control" name="message" id="message-text" rows="10">{{ $applycompliant->message }}</textarea>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    
                                                                  </div>
                                                                </form>
                                                              </div>
                                                              
                                                            </div>
                                                          </div>
                                                        </div>
                                                            @elseif ($applycompliant->status == 2)
                                                            <button disabled type="button" class="btn btn-danger">

                                                                <span class="link-title">Rejected</span>

                                                            </button>
                                                            <button type="button" class="btn btn-second" data-toggle="modal" data-target="#exampleModal{{ $applycompliant->id }}" data-whatever="@mdo"> <i class="link-icon" data-feather="mail"></i></button>
                                                        
                                                        
                                                        <div class="modal fade" id="exampleModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"> Rejected With Message</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form >
                                                                 
                                                                  <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                                    <textarea disabled class="form-control" name="message" id="message-text" rows="10">{{ $applycompliant->message }}</textarea>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                   
                                                                  </div>
                                                                </form>
                                                              </div>
                                                              
                                                            </div>
                                                          </div>
                                                        </div>
                                                        @endif
                                                    </td>

                                                    <td>

                                                        @if (isset(auth()->user()->role->permission['name']['compliant']['can-view']))

                                                            <a
                                                                href="{{ route('applyed-compliant.viewapplyedcompliant', [$applycompliant->id]) }}">
                                                                <i class="link-icon" data-feather="eye"></i>
                                                            </a>

                                                        @endif

                                                    </td>

                                                </tr>
                                            @else
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $applycompliant->loantype->{'title_' . app()->getLocale()} }}
                                                    </td>
                                                    <td>{{ $applycompliant->name }}</td>
                                                    <td>
                                                      @if ($applycompliant->email == null)
                                                      No Email to Disply

                                                      @else
                                                      {{ $applycompliant->email }}
                                                    @endif
                                                    </td>
                                                    <td>0{{ $applycompliant->phone }}</td>
                                                    <td>
                                                      @if ($applycompliant->status == null)

                                                    {{-- ====== Aprovel ===== --}}
                                                      
                                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $applycompliant->id }}" data-whatever="@mdo">Aprove</button>
                                                      
                                                      
                                                      <div class="modal fade" id="exampleModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Aprovel With Messages</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form action="{{ route('aprove-compliant.aprove',[$applycompliant->id]) }}" method="POST" enctype="multipart/form-data">@csrf
                                                                {{method_field('PATCH')}}
                                                                
                                                                <div class="form-group">
                                                                  <label for="message-text" class="col-form-label">Message:</label>
                                                                  <input type="number"  name="status" id="status" value="1" hidden>
                                                                  <textarea class="form-control" name="message" id="message-text" rows="10"></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                  <button type="submit" class="btn btn-primary">Aprove</button>
                                                                </div>
                                                              </form>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                      </div>


                                                      {{-- ====== Reject ===== --}}
                                                      
                                                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#rejectModal{{ $applycompliant->id }}" data-whatever="@mdo">Reject</button>
                                                      
                                                      
                                                      <div class="modal fade" id="rejectModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Reject With Messages</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form action="{{ route('aprove-compliant.aprove',[$applycompliant->id]) }}" method="POST" enctype="multipart/form-data">@csrf
                                                                {{method_field('PATCH')}}
                                                                
                                                                <div class="form-group">
                                                                  <label for="message-text" class="col-form-label">Message:</label>
                                                                  <input type="number"  name="status" id="status" value="2" hidden>
                                                                  <textarea class="form-control" name="message" id="message-text" rows="10"></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                  <button type="submit" class="btn btn-danger">Reject</button>
                                                                </div>
                                                              </form>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                      </div>


                                                      @elseif ($applycompliant->status == 1)
                                                          <button  disabled type="button" class="btn btn-success">

                                                              <span class="link-title">Aproved</span>

                                                          </button>

                                                            
                                                      <button type="button" class="btn btn-second" data-toggle="modal" data-target="#exampleModal{{ $applycompliant->id }}" data-whatever="@mdo"> <i class="link-icon" data-feather="mail"></i></button>
                                                      
                                                      
                                                      <div class="modal fade" id="exampleModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel"> Aproved with Messages</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form>
                                                                
                                                                <div class="form-group">
                                                                  <label for="message-text" class="col-form-label">Message:</label>
                                                                  <textarea disabled class="form-control" name="message" id="message-text" rows="10">{{ $applycompliant->message }}</textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  
                                                                </div>
                                                              </form>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                      </div>
                                                          @elseif ($applycompliant->status == 2)
                                                          <button disabled type="button" class="btn btn-danger">

                                                              <span class="link-title">Rejected</span>

                                                          </button>
                                                          <button type="button" class="btn btn-second" data-toggle="modal" data-target="#exampleModal{{ $applycompliant->id }}" data-whatever="@mdo"> <i class="link-icon" data-feather="mail"></i></button>
                                                      
                                                      
                                                      <div class="modal fade" id="exampleModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Rejected With Messages</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form >
                                                               
                                                                <div class="form-group">
                                                                  <label for="message-text" class="col-form-label">Message:</label>
                                                                  <textarea disabled class="form-control" name="message" id="message-text" rows="10">{{ $applycompliant->message }}</textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                 
                                                                </div>
                                                              </form>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                      </div>
                                                      @endif
                                                  </td>
                                                    <td>

                                                        @if (isset(auth()->user()->role->permission['name']['compliant']['can-view']))

                                                            <a
                                                                href="{{ route('applyed-compliant.viewapplyedcompliant', [$applycompliant->id]) }}">
                                                                <i class="link-icon" data-feather="eye"></i>
                                                            </a>

                                                        @endif

                                                    </td>

                                                </tr>
                                            @endif



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
