<div class="form-group">
    <label for="{{ $input_name }}">{{ $input_title }}</label>
    <textarea id="{{ $input_name }}" name="{{ $input_name }}" class="form-control">{!! $input_value !!}</textarea>
    <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
      };
    </script>
    <script>
      CKEDITOR.replace({!! $input_name !!}, options);
    </script>
    @if($errors->has($input_name))
        <div class="alert alert-danger" role="alert">
            @foreach($errors->get($input_name) as $err)
                {{ $err }}
            @endforeach
        </div>
    @endif
</div>
