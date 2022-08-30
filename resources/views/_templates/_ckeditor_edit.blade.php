<div class="form-group">
    <label for="{{ $input_name }}">{{ $input_title }}</label>
    <textarea class="ckeditor" id="{{ $input_name }}" name="{{ $input_name }}">{!! $input_value !!}</textarea>
    @if($errors->has($input_name))
        <div class="alert alert-danger" role="alert">
            @foreach($errors->get($input_name) as $err)
                {{ $err }}
            @endforeach
        </div>
    @endif
</div>
