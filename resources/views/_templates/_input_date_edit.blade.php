@php
    $date = new DateTime($input_value);
    $day = $date->format('Y-m-d');
@endphp
<div class="form-group">
    <label for="{{ $input_name }}">{{ $input_title }}</label>
    <input type="date" class="form-control" id="{{ $input_name }}" name="{{ $input_name }}" value="{{ $day }}">
    @if($errors->has($input_name))
        <div class="alert alert-danger" role="alert">
            @foreach($errors->get($input_name) as $err)
                {{ $err }}
            @endforeach
        </div>
    @endif
</div>
