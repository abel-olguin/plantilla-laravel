@props([
    'title' => '',
    'value' => '',
    'name'    => 'input',
    'id'    => '',
    'model' => '',
    'min' => '',
    'max' => '',
    'time' => false
])

<div class="grid gap-y-2">
    @if($title)
        <label for="{{$id ?: $name}}">{{__($title)}}</label>
    @endif
    <input type="{{$time ? 'datetime-local' : 'date'}}" name="{{$name}}" id="{{$id ?: $name}}" class="input"
           value="{{$value}}" {{$model ? 'x-model='.$model : ''}} {{$min ? "min={$min}" : ''}} {{$max ? "min='{$max}'" : ''}}/>
    <small class="input-error {{!$errors->has($name) ? 'hidden' : ''}}"
           id="error-{{$id ?: $name}}">{{ $errors->first($name) }}</small>

</div>
