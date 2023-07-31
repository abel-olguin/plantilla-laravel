@props([
    'title' => '',
    'value' => false,
    'name'    => 'input',
    'id'    => '',
    'model' => '',
    'help' => ''
])
<div class="grid gap-4">
    <span>{{$title}}</span>
    <div class="grid w-12 h-7 grid-cols-2 rounded-full bg-gray-900 p-1">
        <div>
            <input type="radio" name="{{$name}}" id="{{$id ?: $name}}-disabled" value="0"
                   class="peer hidden" {{!$value ? 'checked' : ''}} {{$model ? 'x-model='.$model : ''}}/>
            <label for="{{$id ?: $name}}-disabled" class="switch-control switch-control-disabled"></label>
        </div>

        <div>
            <input type="radio" name="{{$name}}" id="{{$id ?: $name}}-enabled" value="1"
                   class="peer hidden" {{$value ? 'checked' : ''}} {{$model ? 'x-model='.$model : ''}}/>
            <label for="{{$id ?: $name}}-enabled" class="switch-control switch-control-enabled"></label>
        </div>
    </div>
    @if($help)
        <small>{{$help}}</small>
    @endif
    <small class="input-error {{!$errors->has($name) ? 'hidden' : ''}}"
           id="error-{{$id ?: $name}}">{{ $errors->first($name) }}</small>
</div>
