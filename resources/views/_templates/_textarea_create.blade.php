<div class="form-group">
    <label for="{{ $input_name }}">{{ $input_title }}</label>
    <textarea class="form-control" id="{{ $input_name }}" name="{{ $input_name }}" rows="5">{{ old($input_name) }}</textarea>
    @if($errors->has($input_name))
        <div class="alert alert-danger" role="alert">
            @foreach($errors->get($input_name) as $err)
                {{ $err }}
            @endforeach
        </div>
    @endif
</div>
