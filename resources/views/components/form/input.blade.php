@props([
    'title' => '',
    'value' => '',
    'name'    => 'input',
    'id'    => '',
    'type' => 'text',
    'options' => [],
    'model' => ''
])

@if(in_array($type, ['email', 'text', 'password']))
    <div class="grid gap-y-2">
        @if($title)
            <label for="{{$id ?: $name}}">{{__($title)}}</label>
        @endif
        <input type="{{$type}}" name="{{$name}}" id="{{$id ?: $name}}" class="input"
               value="{{$value}}" {{$model ? 'x-model='.$model : ''}}/>
        <small class="input-error {{!$errors->has($name) ? 'hidden' : ''}}"
               id="error-{{$id ?: $name}}">{{ $errors->first($name) }}</small>

    </div>
@endif

