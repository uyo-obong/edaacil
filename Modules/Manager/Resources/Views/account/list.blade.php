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
                                        @foreach( $accounts as $account)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $account->fullName() }}</td>
                                                <td>{{ $account->email }}</td>
                                                <td>{{ $account->phone_number }}</td>
                                                <td>{{ $account->status }}</td>
                                                <td>{{ $account->role }}</td>
                                                <td> @include('manager::account.buttons.view')  @include('manager::account.buttons.edit')  </td>
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
    </section>

    @include('manager::account.form')
    @include('manager::account.edit_account')
    @include('manager::account.view_account')
@stop

@push('scripts')
    <script>
        $('#editAccountModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var accountId = button.data('id');
            var email = button.data('email');
            var status = button.data('status');

            var modal = $(this);
            modal.find('.modal-body #accountId').val(accountId);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #status').val(status).change();
        });
    </script>

    <script>
        $('#viewAccountModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var fullName = button.data('name');
            var role = button.data('role');
            var email = button.data('email');
            var phone = button.data('phone');
            var address = button.data('address');
            var city = button.data('city');
            var state = button.data('state');
            var country = button.data('country');

            var modal = $(this);
            modal.find('.modal-body #fullName').text(fullName);
            modal.find('.modal-body #role').text('Edaacil '+role);
            modal.find('.modal-body #email').text(email);
            modal.find('.modal-body #phone').text(phone);
            modal.find('.modal-body #address').text(address);
            modal.find('.modal-body #city').text(city);
            modal.find('.modal-body #state').text(state);
            modal.find('.modal-body #country').text(country);
        });
    </script>
@endpush