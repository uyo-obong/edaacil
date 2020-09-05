@extends('agent::layouts.master')

@section('title', 'Certificate')
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <style>
        @media print and (width: 105mm) and (height: 148mm) {
            @page {
                margin: 3cm;
            }
        }
        .unselectable {
            -webkit-user-select: none;
            -webkit-touch-callout: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
@endpush
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Generate Certificate</h2>

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Certificate</strong> Form</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{ route('agent.certificate.issue') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ old("name_of_policy_holder") }}" class="form-control" placeholder="Name of Policy Holder" name="name_of_policy_holder" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ old("make_of_vehicle") }}" class="form-control" placeholder="Make of Vehicle" name="make_of_vehicle" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ old("phone_number") }}" class="form-control" placeholder="Phone Number" name="phone_number" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ old("plate_number") }}" class="form-control" placeholder="Plate Number" name="plate_number" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ old("chassis_number") }}" class="form-control" placeholder="Chassis Number" name="chassis_number" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ old("type_of_cover") }}" class="form-control" placeholder="Type of Cover" name="type_of_cover" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ old("amount") }}" class="form-control" placeholder="Amount" name="amount">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group masked-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Expiring Date</span>
                                            </div>
                                            <input type='text'  class="form-control" name="expiring_date" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <select class="form-control show-tick" name="policy_number">
                                                <option value="">-- Select policy number --</option>
                                                <option value="PM">Private Motor</option>
                                                <option value="CM">Commercial Motor</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    @if($urlPath !== $certificate->token_id)
                                    <button class="float-right btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

                @includeIf('agent::certificate.data')

            </div>
        </div>
    </div>
@stop
@push('scripts')
    <script src="{{ URL::to('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(function() {
            $('input[name="expiring_date"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 2018,
            });
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
            window.location.href = '/agent';
        }

    </script>
@endpush
