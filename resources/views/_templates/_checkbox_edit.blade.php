@php
    $checked = false;
    if (old($input_name)) {
        if (old($input_name) === 1) {
            $checked = true;
        }
    }else {
       if ($input_value == 1) {
            $checked = true;
       }
    }
@endphp
<div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="{{ $input_name }}" name="{{ $input_name }}"
               value="1" @if($checked) checked @endif>
        <label class="form-check-label" for="{{ $input_name }}">
            {{ $input_title }}
        </label>
    </div>
    @if($errors->has($input_name))
        <div class="alert alert-danger" role="alert">
            @foreach($errors->get($input_name) as $err)
                {{ $err }}
            @endforeach
        </div>
    @endif
</div>
