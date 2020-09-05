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
                            {!! $chart->container() !!}
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
                            {!! $chart->script() !!}
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
                                            <td>{{ isset($certificate->token['token']) ? $certificate->token['token']
                                             : '' }}</td>
                                            <td>{{ $certificate->name_of_policy_holder }}</td>
                                            <td>{{ isset($certificate->manager) ? $certificate->manager->fullName() : ''  }}</td>
                                            <td>{{ $certificate->created_at->format('d, M Y') }}</td>
                                            <td>@includeIf('manager::reprint-data.buttons.view')</td>
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

  @includeIf('manager::reprint-data.certificate-modal')

@stop
@push('scripts')
    <script>
        $('#viewCertificateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var certificateId = button.data('id');
            var token = button.data('token');
            var holderName = button.data('name');
            var amount = button.data('amount');
            var policyNumber = button.data('policy-number');
            var policyName = button.data('policy-name');
            var certificateNumber = button.data('certificate-number');
            var indexMark = button.data('index-mark');
            var plateNumber = button.data('plate-number');
            var chassisNumber = button.data('chassis-number');
            var vehicle = button.data('make-of-vehicle');
            var cover = button.data('type-of-cover');
            var registration = button.data('registration');
            var expiring = button.data('expiring');


            var modal = $(this);
            modal.find('.modal-content #holderName').append(holderName);
            modal.find('.modal-content #amount').append(amount);
            modal.find('.modal-content #policyName').append(policyName);
            modal.find('.modal-content #certificateId').text(certificateId);
            modal.find('.modal-content #token').text(token);
            modal.find('.modal-content #policyNumber').append(policyNumber);
            modal.find('.modal-content #certificateNumber').append(certificateNumber);
            modal.find('.modal-content #indexMark').append(indexMark);
            modal.find('.modal-content #plateNumber').append(plateNumber);
            modal.find('.modal-content #chassisNumber').append(chassisNumber);
            modal.find('.modal-content #vehicle').append(vehicle);
            modal.find('.modal-content #cover').append(cover);
            modal.find('.modal-content #registration').append(registration);
            modal.find('.modal-content #expiring').append(expiring);
            console.log(policyName)
        });
    </script>

    <script>
        function printPageArea(){
            var print_div = document.getElementById("printCertificate");
            var print_area = window.self;
            print_area.document.write(print_div.innerHTML);
            print_area.document.close();
            print_area.focus();
            print_area.print();
            print_area.closePrintView();

        }

        function closePrintView() {
            window.location.href = '/manager';
        }
    </script>

    <script>
        $(document).ready(function(){
            $(".reload").click(function(){
                history.go(0);
            });
        });
    </script>
@endpush
