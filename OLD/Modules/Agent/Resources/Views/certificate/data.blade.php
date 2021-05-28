<div class="col-lg-6">
    <div class="card">
        <div class="header">
            <h2><strong>Certificate</strong> Collection</h2>
        </div>
        <div class="body">
            @if($certificate != null && $urlPath == $certificate->token_id)
                <div id="printCertificate" class="unselectable">
                    <div style="padding-top: 150px"></div>

                    <div style="float: right">Policy No.: {{ $certificate->policy_number }} </div><div id="certificateNumber">Certificate No.: {{ $certificate->certificate_number }}</div>
                    <br>
                    <ol>
                        <li id="plateNumber">Index Mark and Registration <br> No. of Vehicle Plate: {{ $certificate->plate_number }}</li>
                        <li id="chassisNumber">Chassis Number: {{ $certificate->chassis_number }}</li>
                        <li id="vehicle">Make of Vehicle: {{ $certificate->make_of_vehicle }}</li>
                        <li id="certificateNumber">Name of Policy Holder: {{ $certificate->name_of_policy_holder }}</li>
                        <li id="registration">Effective Date of Commencement of Insurance for the Purposes of the Act: {{ $certificate->registration_date }}</li>
                        <li id="expiring">Date of Expiry of Insurance: {{ $certificate->expiring_date }}</li>
                        <li id="cover">Type of Cover: {{ $certificate->type_of_cover }}</li>

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
                        <li><b>Limitations As To Use<sup>*</sup> {{ $certificate->policy_name }}</b><br>
                            Use only for social, domestic and pleasure purposes and for the Policy-holder's business. The policy does not cover<sup>*</sup><br>
                            (a) Use for hiring racing, pace-making, reliability trial speed-testing<br>
                            (b) Use while drawing a trailer except the towing (other than for reward) of any one disabled mechanically propelled vehicle.<br>
                            (c) Use for the conveyance of passengers for hire or reward.
                        </li>
                        <h3><b id="amount">Amount: ₦{{ $certificate->amount }}</b></h3>
                    </ol>
{{--                    <p><b>I/WE HEREBY CERTIFY</b> that the Policy to which this certificate related is issued in accordance with the above provisions of the Motor Vehicles. (Third Party Insurance) Ordinance</p>--}}

                    <div style="float: right; padding-top: 50px; padding-bottom: 60px"><img src="{{ URL::to('signature.png') }}" alt="signature" width="100" height="50"><br><b>__________________</b><br>Authority of the society </div>

                    <div><img style="padding-left: 20px" src="{{ URL::to('edaacil-stamp.png') }}" alt="Image" width="100" ><br><b>__________________</b><br>EXAMINED BY</div>
                </div>

                <div class="clearfix"></div>
                <form>
                    <input type="button" value="Print" class="float-right btn btn-primary" onclick="printPageArea()">
                </form>
                <div class="clearfix"></div>
        </div>

    </div>

    @else
        <div class="body text-center">
            <h4 class="m-t-0">Certificate loading...</h4>
            <div style="display:inline;width:140px;height:140px;"><canvas width="140" height="140"></canvas><input type="text" class="knob dial1" value="97" data-width="140" data-height="140" data-thickness="0.1" data-fgcolor="#00ced1" readonly="readonly" style="width: 74px; height: 46px; position: absolute; vertical-align: middle; margin-top: 46px; margin-left: -107px; border: 0px; background: none; font: bold 28px Arial; text-align: center; color: rgb(0, 206, 209); padding: 0px; -webkit-appearance: none;"></div>
            <h6 class="m-t-30">You are almost there</h6>
            <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="45px" data-bar-width="2" data-bar-spacing="8" data-bar-color="#00ced1"><canvas width="192" height="45" style="display: inline-block; width: 192px; height: 45px; vertical-align: top;"></canvas></div>
        </div>
    @endif
</div>

</div>
</div>
