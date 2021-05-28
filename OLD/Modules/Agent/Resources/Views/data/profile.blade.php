@extends('agent::layouts.master')

@section('title', 'Agent Dashboard')

@push('css')
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/dropify/css/dropify.min.css') }}">
@endpush
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/agent"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card mcard_4">
                        <div class="body">
                            <div class="img">
                                <img src="{{ URL::to('assets/images/lg/avatar2.jpg') }}" class="rounded-circle" alt="profile-image">
                            </div>
                            <div class="user">
                                <h5 class="mt-3 mb-1">{{ $agent->fullName() }}</h5>
                                <small class="text-muted">{{ $agent->email }}</small>
                                <div class="progress-container progress-success">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <small class="text-muted">Email address: </small>
                            <p>{{ $agent->email }}</p>
                            <hr>
                            <small class="text-muted">Phone: </small>
                            <p>{{ $agent->phone_number }}</p>
                            <hr>
                            <small class="text-muted">Address: </small>
                            <p>{{ $agent->address }}</p>
                            <hr>
                            <small class="text-muted">City: </small>
                            <p>{{ $agent->city }}</p>
                            <hr>
                            <small class="text-muted">State: </small>
                            <p>{{ $agent->state }}</p>
                            <hr>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                            @includeIf('agent::data.edit_profile')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
    <script src="{{ URL::to('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/pages/forms/dropify.js') }}"></script>
@endpush