@props([
    'title' => '',
    'value' => '',
    'name'    => 'input',
    'id'    => '',
    'step' => 1,
    'max' => null,
    'min' => null,
    'model' => ''
])

<div class="grid gap-y-2">
    @if($title)
        <label for="{{$id ?: $name}}">{{__($title)}}</label>
    @endif
    <input type="number" name="{{$name}}" id="{{$id ?: $name}}" class="input" step="{{$step}}"
           value="{{$value}}" {{$model ? 'x-model='.$model : ''}} {{$max ? 'max='.$max : ''}}{{$min ? 'min='.$min : ''}}/>
    <small class="input-error {{!$errors->has($name) ? 'hidden' : ''}}"
           id="error-{{$id ?: $name}}">{{ $errors->first($name) }}</small>

</div>

