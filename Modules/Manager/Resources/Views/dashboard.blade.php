@extends('manager::layouts.master')

@section('content')

    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/manager"><i class="zmdi zmdi-home"></i> Edaacil</a></li>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong><i class="zmdi zmdi-chart"></i> Sales</strong> Report</h2>
                        </div>

                        <div class="body">
                            <div id="chart-area-spline-sracked" class="c3_chart d_sales"></div>
                        </div>
                    </div>
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
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Token</th>
                                        <th>Holder</th>
                                        <th>Issued By</th>
                                        <th>Issued On</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Token</th>
                                        <th>Holder</th>
                                        <th>Issued By</th>
                                        <th>Issued On</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($certificates as $certificate)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $certificate->token['token'] }}</td>
                                            <td>{{ $certificate->name_of_policy_holder }}</td>
                                            <td>{{ $certificate->manager->fullName() }}</td>
                                            <td>{{ $certificate->created_at->format('d, M Y') }}</td>
                                            <td><a class="btn btn-success" href="">View</a> </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@stop