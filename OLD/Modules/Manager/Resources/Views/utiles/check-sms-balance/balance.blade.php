<div class="modal fade" id="viewSmsBalanceModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="mediumModalLabel">SMS BALANCE</h4>
            </div>

            <div class="modal-body body">
                <center><h2> {{ checkSmsBalance() <= 2 ? "Your account is low, pls subscribe" : checkSmsBalance() .' Units Left'}} </h2></center>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect reload" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
