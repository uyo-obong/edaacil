<script>
@if( Session::has('success') || Session::has('warning') )
    var notify = $.notify('<strong>Processing:</strong> Do not close this page...', {
    allow_dismiss: false,
    showProgressbar: true
    });

    setTimeout(function() {
    notify.update({'type': '{{ Session::has('success') ? 'success' : 'warning' }}', 'message': '{{ Session::get("success") ?: Session::get("warning")}}', 'progress': 20});
    }, 100);
    @php
        Session::forget('success');
        Session::forget('warning');
    @endphp
@endif
</script>