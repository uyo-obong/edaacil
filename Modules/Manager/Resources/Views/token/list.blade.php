@extends('manager::layouts.master')

@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Manage Token</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/manager"><i class="zmdi zmdi-home"></i> Edaacil</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Token</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                        <button class="btn btn-success btn-icon float-right waves-effect" data-toggle="modal" data-target="#addTokenModal" type="button"><i class="zmdi zmdi-plus"></i></button>
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
                                            <th>Status</th>
                                            <th>Holder</th>
                                            <th>Created</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Token</th>
                                            <th>Status</th>
                                            <th>Holder</th>
                                            <th>Created</th>
                                            <th>Delete</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!$tokens->isEmpty())
                                            @foreach($tokens as $token)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $token->token }}</td>
                                                    <td><a class="{{ $token->status == 'Unused' ? 'badge-success' : 'badge-danger' }}" href="#">{{ $token->status }}</a></td>
                                                    <td>{{ $token->certificate['name_of_policy_holder'] ?: '___' }}</td>
                                                    <td>{{ $token->created_at->diffForHumans() }}</td>
                                                    <form action="{{ route('manager.token.delete', $token->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <td><button class="btn btn-danger">Delete</button></td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                        @endif
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

    @include('manager::token.form')
@stop