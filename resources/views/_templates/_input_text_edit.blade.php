<div class="form-group">
    <label for="{{ $input_name }}">{{ $input_title }}</label>
    <input type="text" class="form-control" id="{{ $input_name }}" name="{{ $input_name }}"
           value="@if(old($input_name)){{ old($input_name) }}@else{{ $input_value }}@endif">
    @if($errors->has($input_name))
        <div class="alert alert-danger" role="alert">
            @foreach($errors->get($input_name) as $err)
                {{ $err }}
            @endforeach
        </div>
    @endif
</div>
