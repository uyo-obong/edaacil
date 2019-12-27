<div class="modal fade" id="addAccountModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Add Account</h4>
            </div>
            <form id="form_validation" method="POST" action="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
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
                                <select  class="form-control show-tick" name="role" required>
                                    <option value="">-- Please select role --</option>
                                    <option value="manager">Manager</option>
                                    <option value="agent">Agent</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Address" name="address" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="City" name="city" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="State" name="state" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Country" name="country" required>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-default waves-effect">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>