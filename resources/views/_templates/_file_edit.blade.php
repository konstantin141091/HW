<div class="form-group">
    <label for="{{ $input_name}}">{{ $input_title }}</label><br>
    @if(!is_null($input_value))
        <a href="{{ \Illuminate\Support\Facades\Storage::url($input_value) }}" download>Текущий файл</a>
    @else
        <p>Файл не загружен</p>
    @endif
    <input type="file" class="form-control" id="{{ $input_name}}" name="{{ $input_name}}" multiple>
    @if($errors->has($input_name))
        <div class="alert alert-danger" role="alert">
            @foreach($errors->get($input_name) as $err)
                {{ $err }}
            @endforeach
        </div>
    @endif
</div>
