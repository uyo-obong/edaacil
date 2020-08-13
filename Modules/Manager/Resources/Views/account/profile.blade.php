@extends('manager::layouts.master')

@section('title', 'Manager Profile')
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/manager"><i class="zmdi zmdi-home"></i> Edaacil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manager.account.list') }}">Account</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                        <a href="{{ route('manager.account.edit.profile') }}" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-edit"></i></a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card mcard_3">
                            <div class="body">
                                <a href="#"><img src="/storage/{{ auth()->user()->profile_image }}" class="rounded-circle shadow " alt="profile-image"></a>
                                <h4 class="m-t-10">{{ auth()->user()->fullName() }}</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="text-muted">{{ auth()->user()->role }} Edaacil — {{ auth()->user()->country }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <small class="text-muted">Email address: </small>
                                <p>{{ auth()->user()->email }}</p>
                                <hr>
                                <small class="text-muted">Phone: </small>
                                <p>{{ auth()->user()->phone_number }}</p>
                                <hr>
                                <small class="text-muted">Address: </small>
                                <p>{{ auth()->user()->address }}</p>
                                <hr>
                                <small class="text-muted">City: </small>
                                <p>{{ auth()->user()->city }}</p>
                                <hr>
                                <small class="text-muted">State: </small>
                                <p>{{ auth()->user()->state }}</p>
                                <hr>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div id="calendar"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop