@if ($errors->any())
    <div class="alert-box alert-box--error hideit">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <i class="fa fa-times alert-box__close"></i>
    </div>
@endif