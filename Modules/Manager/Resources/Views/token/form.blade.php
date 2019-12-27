<div class="modal fade" id="addTokenModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Generate Token</h4>
            </div>
            <form id="form_validation" method="POST" action="{{ route('manager.token.generate') }}">
                <div class="modal-body">
                    <div class="form-group form-float">
                        <input type="number" class="form-control" placeholder="Enter amount of pin" name="name" required aria-required="true">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-default waves-effect">GENERATE</button>
                </div>
            </form>
        </div>
    </div>
</div>