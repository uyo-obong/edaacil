@extends('agent::layouts.master')

@section('title', 'Certificate')
@push('css')
    <style>
        @page {
            margin-top: 2cm;
            margin-bottom: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
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

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <input type="email" value="{{ old("email") }}" class="form-control" placeholder="Email" name="email" required>
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

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ old("make_of_vehicle") }}" class="form-control" placeholder="Make of Vehicle" name="make_of_vehicle" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ old("type_of_cover") }}" class="form-control" placeholder="Type of Cover" name="type_of_cover" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group form-float masked-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                            </div>
                                            <input type="text" value="{{ old("expiring_date") }}" class="form-control" placeholder="Expiring Date (Ex: 12/12/2021)" name="expiring_date">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button class="float-right btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Certificate</strong> Collection</h2>
                        </div>
                        <div class="body">
                            <div id="printCertificate">
                                <div style="padding-top: 150px"></div>

                                <div style="float: right">Policy No.: {{ $certificate->policy_number }}</div><div  >Certificate No.: {{ $certificate->certificate_number }}</div>
                                <br>
                                <ol>
                                    <li>Index Mark and Registration No. of Vehicle Plate: {{ $certificate->index_mark }}</li>
                                    <li>Chassis Number: {{ $certificate->chassis_number }}</li>
                                    <li>Make of Vehicle: {{ $certificate->make_of_vehicle }}</li>
                                    <li>Name of Policy Holder: {{ $certificate->name_of_policy_holder }}</li>
                                    <li>Effective Date of Commencement of Insurance for the Purposes of the Act: {{ $certificate->registration_date }}</li>
                                    <li>Date of Expiry of Insurance: {{ $certificate->expiring_date }}</li>
                                    <li>Type of Cover: {{ $certificate->type_of_cover }}</li>

                                    <li>Persons or classes of persons entitled to drive whilst the vehicles is being used in connection with the policy holder's business:-
                                        <ul>
                                            <li><p>(a) The policy holder.</p>
                                                <p>(b) Any other person who is driving on the policy holder's order or with his permission. Whilst the vehicles is being used for social domestic or pleasure purposes:-</p>
                                            </li>
                                            <li>
                                                <p>(a) The policy holder.</p>
                                                <p>(b) Any other person who is driving on the policy holder's order or with his permission. Provided that the person driving is permitted in accordance with the licensing or other laws or regulations to drive the Motor Vehicle or has been so permitted and is not disqualified by order of a Court of law or by reason of any enactment or regulation in that behalf from driving such Motor Vehicle.</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><b>Limitations As To Use<sup>*</sup></b>
                                        <p>Use only for social, domestic and pleasure purposes and for the Policy-holder's business. The policy does not cover<sup>*</sup></p>
                                        <p>(a) Use for hiring racing, pace-making, reliability trial speed-testing</p>
                                        <p>(b) Use while drawing a trailer except the towing (other than for reward) of any one disabled mechanically propelled vehicle.</p>
                                        <p>(a) Use for the conveyance of passengers for hire or reward.</p>
                                    </li>

                                </ol>
                            </div>
                            <form>
                                <input type="button" value="Print" class="float-right btn btn-primary" onclick="printPageArea()">
                            </form>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </div>
@stop
@push('scripts')
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