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
                        <li id="plateNumber">Index Mark and Registration No. of Vehicle Plate: </li>
                        <li id="chassisNumber">Chassis Number: </li>
                        <li id="vehicle">Make of Vehicle: </li>
                        <li id="certificateNumber">Name of Policy Holder: </li>
                        <li id="registration">Effective Date of Commencement of Insurance for the Purposes of the Act: </li>
                        <li id="expiring">Date of Expiry of Insurance: </li>
                        <li id="cover">Type of Cover: </li>

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
                <div class="clearfix"></div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect reload" data-dismiss="modal">CLOSE</button>
                <input type="button" value="Print" class="float-right btn btn-primary waves-effect" onclick="printPageArea()">
            </div>

        </div>
    </div>
</div>
