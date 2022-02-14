@if ($message = Session::get('flash_message'))
<div id="toast" class="toast position-fixed bottom-0 end-0 p-2 m-3" role="alert" aria-live="assertive"
    aria-atomic="true">
    <div class="toast-header">
        {{-- <img src="..." class="rounded me-2" alt="..."> --}}
        <span class="bg-danger rounded-circle p-2 m-2"></span>
        <strong class="me-auto">Notification</strong>
        {{-- <small>now</small> --}}
        <a class="closeToast" onclick="document.getElementById('toast').className = 'opac';"><i
                class="bi bi-x-circle"></i></a>
    </div>
    <div class="toast-body">
        {{ $message }}
    </div>
</div>
@endif


@if ($message = Session::get('error_message'))
<div id="toast" class="toast position-fixed bottom-0 end-0 p-2 m-3" role="alert" aria-live="assertive"
    aria-atomic="true">
    <div class="toast-header">
        <span class="bg-success rounded-circle p-2 m-2"></span>
        <strong class="me-auto">Notification</strong>
        {{-- <small>now</small> --}}
        <a class="closeToast" onclick="document.getElementById('toast').className = 'opac';"><i
                class="bi bi-x-circle"></i></a>
    </div>
    <div class="toast-body">
        {{ $message }}
    </div>
</div>
@endif


{{-- ERROR Validation --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{{-- END ERROR Validation --}}