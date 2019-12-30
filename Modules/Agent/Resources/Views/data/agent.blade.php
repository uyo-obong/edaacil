<div class="col-lg-4 col-md-12">
    <div class="card small_mcard_1">
        <div class="user">
            <img src="{{ URL::to('assets/images/sm/avatar1.jpg') }}" alt="profile-image">
            <div class="details">
                <h6 class="mb-0 mt-2">John Doe</h6>
                <p class="mb-0"><small>Edaacil Agent</small></p>
                <a class="btn btn-primary" href="" title="Update Profile">Profile</a>
                <a class="float-right btn btn-danger" href="{{ route('agent.auth.logout') }}" title="Sign Out"><i class="zmdi zmdi-power"></i></a>
            </div>
        </div>
        <div class="footer">
            <div class="progress-container progress-warning">
                <span class="progress-badge">Certificate Issued Today</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span class="progress-value">6</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card small_mcard_1">
        <div class="body">
            <form id="form_validation" method="POST">
                <div class="form-group form-float">
                    <input type="number" class="form-control" placeholder="Enter Token To Proceed" name="token" required>
                </div>

                <div class="form-group form-float">
                    <button class="float-right btn btn-primary" type="submit">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>