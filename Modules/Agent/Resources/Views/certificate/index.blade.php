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
                            <form id="form_validation" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Name of Policy Holder" name="name_of_policy_holder" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Make of Vehicle" name="make_of_vehicle" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Phone Number" name="phone_no" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Plate Number" name="plate_number" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Chassis Number" name="chassis_number" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Make of Vehicle" name="make_of_vehicle" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Type of Cover" name="type_of_cover" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group form-float masked-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                            </div>
                                            <input type="text" class="form-control date" placeholder="Registration Date (Ex: 01/01/2020)" name="registration_date" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group form-float masked-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                            </div>
                                            <input type="text" class="form-control date" placeholder="Expiring Date (Ex: 12/12/2021)" name="expiring_date" required>
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

                                <div style="float: right">Policy No.: 9039834727823</div><div  >Certificate No.: 93737823932</div>
                                <br>
                                <ol>
                                    <li>Index Mark and Registration No. of Vehicle Plate</li>
                                    <li>Chassis Number</li>
                                    <li>Make of Vehicle</li>
                                    <li>Name of Policy Holder</li>
                                    <li>Effective Date of Commencement of Insurance for the Purposes of the Act</li>
                                    <li>Date of Expiry of Insurance</li>
                                    <li>Type of Cover</li>

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