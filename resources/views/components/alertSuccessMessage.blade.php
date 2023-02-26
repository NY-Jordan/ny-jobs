@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mt-2"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>{{ $error }}</div>
    @endforeach
@endif
@if (session('message'))
        <div class="alert alert-success dt-success-msg f12"> <button type="button" class="close" data-dismiss="alert"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> {{ session('message') }}</div>
@endif

@if (session('error'))
        <div class="alert alert-danger dt-success-msg f12"> <button type="button" class="close" data-dismiss="alert"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> {{ session('error') }}</div>
@endif
