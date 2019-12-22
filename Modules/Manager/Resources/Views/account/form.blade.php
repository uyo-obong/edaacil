<div class="modal fade" id="addAccountModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Add Account</h4>
            </div>
            <form id="form_validation" method="POST">
                <div class="modal-body">
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Surname" name="surname" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
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