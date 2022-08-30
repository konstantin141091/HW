<div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="{{ $input_name }}" name="{{ $input_name }}" value="1" @if(old($input_name)) checked @endif>
        <label class="form-check-label" for="{{ $input_name }}">
            {{ $input_title }}
        </label>
    </div>
</div>
