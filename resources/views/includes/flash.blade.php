@if (Session::has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (Session::has('failure')) {
    <div class="alert alert-danger">
        {{ session('failure') }}
    </div>
@endif