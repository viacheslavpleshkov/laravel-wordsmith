@if ($errors->any())
    <div class="alert-box alert-box--error hideit">
        @foreach ($errors->all() as $error)
            <p>
                {{ $error }}
            </p>
        @endforeach
        <i class="fa fa-times alert-box__close"></i>
    </div>
@endif