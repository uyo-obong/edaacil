@push('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
@endpush
<div class="modal fade" id="viewCertificateModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="mediumModalLabel">Reprint Certificate for <i id="token"></i> </h4>
            </div>

            <div class="modal-body body">
                <div id="printCertificate">
                    <div style="padding-top: 150px"></div>

                    <div style="float: right" id="policyNumber">Policy No.: </div><div id="certificateNumber">Certificate No.: </div>
                    <br>
                    <ol>
                        <li id="plateNumber">Index Mark and Registration <br> No. of Vehicle Plate: </li>
                        <li id="chassisNumber">Chassis Number: </li>
                        <li id="vehicle">Make of Vehicle: </li>
                        <li id="holderName">Name of Policy Holder: </li>
                        <li id="registration">Effective Date of Commencement of Insurance for the Purposes of the Act: </li>
                        <li id="expiring">Date of Expiry of Insurance: </li>
                        <li id="cover">Type of Cover: </li>

                        <li>Persons or classes of persons entitled to drive whilst the vehicles is being used in connection with the policy holder's business:-
                            <ul>
                                <li>(a) The policy holder.<br>
                                    (b) Any other person who is driving on the policy holder's order or with his permission. Whilst the vehicles is being used for social domestic or pleasure purposes:-
                                </li>

                                <li>
                                    (a) The policy holder.<br>
                                    (b) Any other person who is driving on the policy holder's order or with his permission. Provided that the person driving is permitted in accordance with the licensing or other laws or regulations to drive the Motor Vehicle or has been so permitted and is not disqualified by order of a Court of law or by reason of any enactment or regulation in that behalf from driving such Motor Vehicle.
                                </li>
                            </ul>
                        </li>
                        <li><b id="policyName">Limitations As To Use<sup >* </sup></b><br>
                            Use only for social, domestic and pleasure purposes and for the Policy-holder's business. The policy does not cover<sup>*</sup><br>
                            (a) Use for hiring racing, pace-making, reliability trial speed-testing<br>
                            (b) Use while drawing a trailer except the towing (other than for reward) of any one disabled mechanically propelled vehicle.<br>
                            (c) Use for the conveyance of passengers for hire or reward.
                        </li>
                        <h3><b id="amount">Amount: ₦</b></h3>
                    </ol>

                    <div style="float: right; padding-top: 50px; padding-bottom: 60px"><img src="{{ URL::to('signature.png') }}" alt="signature" width="100" height="50"><br><b>__________________</b><br>Authority of the society </div>

                    <div><img style="padding-left: 20px" src="{{ URL::to('edaacil-stamp.png') }}" alt="Image" width="100" ><br><b>__________________</b><br>Examined by</div>
                </div>
                <div class="clearfix"></div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect reload" data-dismiss="modal">CLOSE</button>
                <input type="button" value="Print" class="float-right btn btn-primary waves-effect" onclick="printPageArea()">
            </div>

        </div>
    </div>
</div>
