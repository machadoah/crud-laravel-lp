@if (Session::has('success'))
    <div class="alert alert-success">
        <strong>{!! Session::get('success') !!}</strong>
    </div>
@elseif(Session::has('error'))
    <div class="alert alert-danger">
        <strong>{!! Session::get('error') !!}</strong>
    </div>
@endif
