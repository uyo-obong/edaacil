@extends('manager::layouts.master')

@section('title', 'Manager Account')
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Manage Account</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/manager"><i class="zmdi zmdi-home"></i> Edaacil</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Account</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                        <button class="btn btn-success btn-icon float-right waves-effect" data-toggle="modal" data-target="#addAccountModal" type="button"><i class="zmdi zmdi-plus"></i></button>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- Basic Examples -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone No.</th>
                                            <th>Status</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone No.</th>
                                            <th>Status</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tiger Nixon Accountant</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td><a href=""><i class="float-left btn btn-primary zmdi zmdi-eye"></i></a>  <a data-toggle="modal" data-target="#editAccountModal" type="button" href="#"><i class="float-right btn btn-success zmdi zmdi-edit"></i></a> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Garrett Winters Accountant</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td><a href=""><i class="float-left btn btn-primary zmdi zmdi-eye"></i></a>  <a data-toggle="modal" data-target="#editAccountModal" type="button" href="#"><i class="float-right btn btn-success zmdi zmdi-edit"></i></a> </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    @include('manager::account.form')
    @include('manager::account.edit_account')
@stop