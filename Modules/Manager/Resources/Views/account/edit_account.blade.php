<div class="modal fade" id="editAccountModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="mediumModalLabel">Edit Account</h4>
            </div>
            <form id="form_validation" method="post" action="{{ route('manager.account.update') }}">
                <div class="modal-body">
                    {{ method_field('PUT') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" id="accountId" name="accountId" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <input type="text" class="form-control" id="email" value="" placeholder="Email Address" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <select  class="form-control show-tick" id="status" name="status" required>
                                    <option value="Active">Active</option>
                                    <option value="Disabled">Disabled</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-default waves-effect">SAVE CHANGES</button>
                </div>
            </form>
        </div>
    </div>
</div>

