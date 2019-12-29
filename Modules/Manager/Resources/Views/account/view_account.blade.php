<div class="modal fade" id="viewAccountModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Account Information</h4>
            </div>
            <div class="modal-body">
                <div class="body_scroll">
                    <div class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12">
                                <div class="card mcard_4">
                                    <div class="body">
                                        <div class="img">
                                            <img src="{{ URL::to('assets/images/lg/avatar2.jpg') }}" class="rounded-circle" alt="profile-image">
                                        </div>
                                        <div class="user">
                                            <h5 class="mt-3 mb-1" id="fullName"></h5>
                                            <div class="btn btn-outline-success" id="role"></div>
                                            <small class="text-muted" id="email"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <small class="text-muted">Phone Number: </small>
                                <p id="phone"></p>
                                <hr>
                                <small class="text-muted">Address: </small>
                                <p id="address"></p>
                                <hr>
                                <small class="text-muted">City: </small>
                                <p id="city"></p>
                                <hr>
                                <small class="text-muted">State: </small>
                                <p id="state"></p>
                                <hr>
                                <small class="text-muted">Country: </small>
                                <p id="country"></p>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
