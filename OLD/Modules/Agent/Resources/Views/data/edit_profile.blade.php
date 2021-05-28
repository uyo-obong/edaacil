<div class="body_scroll">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Security</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="post" action="{{route('agent.change.password')}}">
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="file-name">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" value="{{ $agent->id }}" name="agentId">
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="New Password" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Retype Password" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="float-right btn btn-info">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h2><strong>Account</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="post" action="{{route('agent.update.profile')}}">
                            {{ method_field('PUT') }}
                            <div class="row clearfix">

                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="card">
                                                <a href="javascript:void(0);" class="file">
                                                    <div class="image">
                                                        <input type="file" class="dropify" data-max-file-size="100K">
                                                    </div>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" value="{{ $agent->id }}" name="agentId">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-8 col-md-8">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="{{ $agent->last_name }}" name="last_name" placeholder="Last Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="{{ $agent->first_name }}" name="first_name" placeholder="First Name" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input readonly type="email" class="form-control" value="{{ $agent->email }}" name="email" placeholder="Email Address" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="{{ $agent->phone_no }}" name="phone_no" placeholder="Phone Number">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="{{ $agent->address }}" name="address" placeholder="Address">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <input readonly type="text" class="form-control" value="{{ $agent->city }}" name="city" placeholder="City" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <input readonly type="text" class="form-control" value="{{ $agent->state }}" name="state" placeholder="State" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <input readonly type="text" class="form-control" value="{{ $agent->country }}" name="country" placeholder="Country" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="float-right btn btn-primary">Save Changes</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>