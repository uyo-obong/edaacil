@extends('agent::layouts.master')

@section('title', 'Agent Dashboard')

@push('css')
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
                                        <th>Holder</th>
                                        <th>Day</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Token</th>
                                        <th>Holder</th>
                                        <th>Day</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach( $certificates as $certificate)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $certificate->token['token'] }}</td>
                                            <td>{{ $certificate->name_of_policy_holder }}</td>
                                            <td>{{ $certificate->created_at->format('d') }}</td>
                                            <td>{{ $certificate->created_at->format('M') }}</td>
                                            <td>{{ $certificate->created_at->format('Y') }}</td>
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
    </div>
@stop