@extends('admin.partails.master')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">{{ __('globle.Welcome_to') }} {{ __('globle.News') }}</h4>
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

                    <a href="{{ route('news.create') }}">

                        <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="plus-square"></i> {{ __('globle.News') }}
                        </button>

                    </a>

                </div>
            </div>




        </div>
    </div>

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
                                        <th class="py-6">{{ __('globle.Name') }}</th>
                                        <th class="py-6">{{__('globle.Date')}}</th>

                                        {{-- <th class="py-6">{{__('globle.Description')}}</th> --}}
                                        <th class="no-sort py-6">{{ __('globle.Action.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($news) > 0)
                                        @foreach ($news as $key => $news)

                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ Str::limit($news->{'title_'.app()->getLocale()},50)  }}</td>


                                                <td>{{ $news->created_at->format('d-M-Y') }}</td>
                                                <td>

                                                    @if (@isset(auth()->user()->role->permission['name']['news']['can-edit']))

                                                        <a href="{{ route('news.edit', [$news->id]) }}">

                                                            <i class="link-icon" data-feather="edit"></i>
                                                        </a>

                                                    @endif

                                                    <!-- Button trigger modal -->

                                                    @if (@isset(auth()->user()->role->permission['name']['news']['can-delete']))

                                                        <button type="button" class="btn btn-link" data-toggle="modal"
                                                            data-target="#exampleModal{{ $news->id }}">
                                                            <i class="link-icon text-danger" data-feather="trash"></i>
                                                        </button>

                                                    @endif


                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $news->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <form action="{{ route('news.destroy', [$news->id]) }}"
                                                                method="POST"> @csrf
                                                                {{ method_field('DELETE') }}
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            {{ __('globle.Action.Delete') }}
                                                                            {{ __('globle.News') }}</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Do you want to delete
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cancel</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">{{ __('globle.Action.Delete') }}</button>
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
