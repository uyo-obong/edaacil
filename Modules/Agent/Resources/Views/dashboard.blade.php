@extends('agent::layouts.master')

@section('title', 'Agent Dashboard')

@push('styles')
   <style>
      .content {
           margin: 0px 40px 0px 40px !important;
       }
   </style>
@endpush
@section('content')
<div class="body_scroll">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Manage Certificates</h2>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            @includeIf('agent::data.agent')
            <div class="col-lg-8">
                <div class="card">

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Token</th>
                                    <th>Owner</th>
                                    <th>Day</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Token</th>
                                    <th>Owner</th>
                                    <th>Day</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>472628394857</td>
                                    <td>John Doe</td>
                                    <td>24</td>
                                    <td>December</td>
                                    <td>2019</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>472628394883</td>
                                    <td>Peter John</td>
                                    <td>25</td>
                                    <td>December</td>
                                    <td>2019</td>
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
@stop