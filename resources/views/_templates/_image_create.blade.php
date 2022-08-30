<div class="personal-area__data-col" style="border-bottom: solid 2px #055562; border-top: solid 2px #055562;">
    <div class="title-4 personal-area__data-info-left">{{ $input_title }}</div>
    <div class="form-group">
        @php
            $img = \Illuminate\Support\Facades\Storage::url('public/images/no-image.png');
        @endphp
        <div>
            <label class="btn btn-info" for="{{ $input_name }}">Загрузить изображение</label>
{{--            <div>--}}
{{--                Допустимые изображения до 3MB ; в формате JPG, PNG ; разрешение 3:4 размером 456х367 px--}}
{{--            </div>--}}
            <input type="file" class="admin_image_preloader" name="{{ $input_name }}" id="{{ $input_name }}" multiple="multiple" style="border: 0;left: 0;top: 0;z-index: 1;padding: 0;opacity: 0;"/><br>
            <div style="max-height: 300px">
                <img src="{{ $img }}" id="div_{{ $input_name }}" style="max-height: 300px">
            </div>
        </div>
        @if($errors->has($input_name))
            <div class="alert alert-danger" role="alert">
                @foreach($errors->get($input_name) as $err)
                    {{ $err }}
                @endforeach
            </div>
        @endif
    </div>
</div>
