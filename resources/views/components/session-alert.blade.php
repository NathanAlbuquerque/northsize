@props(['type'])

{{-- primary, secondary, success, danger, warning, info, light, dark --}}

@if (session($type))
    <div class="col-lg-12 col-md-12 col-12">
        <div class="alert alert-{{ $type }}" role="alert">
            {{ session($type) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif
