<div class="personal-area__data-col" style="border-bottom: solid 2px #055562; border-top: solid 2px #055562;">
    <div class="input-group">
               <span class="input-group-btn">
                 <a id="{{ $input_name }}" data-input="thumbnail_{{ $input_title }}" data-preview="holder_{{ $input_title }}" class="btn btn-primary">
                   <i class="fa fa-picture-o"></i>{{ $input_title }}</a>
               </span>
        <input id="thumbnail_{{ $input_title }}" class="d-none" type="text" name="{{ $input_name }}" value="{{ $input_value }}">
    </div>
    <div id="holder_{{ $input_title }}" style="margin-top:15px;max-height:300px;">
        @if($input_value)
            @php
                $input_value_array = explode('/', $input_value);
            @endphp
            <p>{{ end($input_value_array) }}</p>
            <img style="height: 5rem" src="{{ \Illuminate\Support\Facades\Storage::url('public/images/file.png') }}">
        @else
            <img style="height: 5rem" src="{{ \Illuminate\Support\Facades\Storage::url('public/images/no-image.png') }}">
        @endif
    </div>
    @if($errors->has($input_name))
        <div class="alert alert-danger" role="alert">
            @foreach($errors->get($input_name) as $err)
                {{ $err }}
            @endforeach
        </div>
    @endif
</div>

<script>
  var route_prefix = "/laravel-filemanager";
  lfm({!! json_encode($input_name) !!}, 'file', {prefix: route_prefix});
</script>
