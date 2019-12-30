<script>
@if( Session::has('success') || Session::has('danger') )
    var notify = $.notify('<strong>Processing:</strong> Do not close this page...', {
    allow_dismiss: false,
    showProgressbar: true
    });

    setTimeout(function() {
    notify.update({'type': '{{ Session::has('success') ? 'success' : 'danger' }}', 'message': '{{ Session::get("success") ?: Session::get("danger")}}', 'progress': 20});
    }, 100);
    @php
        Session::forget('success');
        Session::forget('danger');
    @endphp
@endif
</script>