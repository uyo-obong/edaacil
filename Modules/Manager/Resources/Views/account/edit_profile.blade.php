@extends('manager::layouts.master')

@section('title', 'Edit Profile')
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Profile Edit</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/manager"><i class="zmdi zmdi-home"></i> Edaacil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manager.account.list') }}">Account</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('manager.account.profile') }}">Profile</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>

                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Security</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <form id="form_validation" method="post" action="">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="New Password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="password" name="confirm_password" class="form-control" placeholder="Retype Password" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="float-right btn btn-info">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <form id="form_validation" method="post" action="{{route('manager.account.manager.update.profile')}}">
                                    {{ method_field('PUT') }}
                                    <div class="row clearfix">

                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="card">
                                                        <a href="javascript:void(0);" class="file">
                                                            <div class="image">
                                                                <img src="{{ URL::to('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="hidden" value="{{ $manager->id }}" name="managerId">
                                                                <input type="file" class="file">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-8 col-md-8">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="{{ $manager->last_name }}" placeholder="Last Name">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                <input type="text" class="form-control" value="{{ $manager->first_name }}" placeholder="First Name" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" value="{{ $manager->email }}" placeholder="Email Address" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="{{ $manager->phone_no }}" placeholder="Phone Number">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="{{ $manager->address }}" placeholder="Address">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <input readonly type="text" class="form-control" value="{{ $manager->city }}" placeholder="City" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <input readonly type="text" class="form-control" value="{{ $manager->state }}" placeholder="State" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <input readonly type="text" class="form-control" value="{{ $manager->country }}" placeholder="Country" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <button class="float-right btn btn-primary">Save Changes</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop