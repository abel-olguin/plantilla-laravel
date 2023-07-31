@props([
    'title' => '',
    'value' => '',
    'name'    => 'input',
    'id'    => '',
    'model' => ''
])
<div class="grid gap-y-2">
    @if($title)
        <label for="{{$id ?: $name}}">{{__($title)}}</label>
    @endif
    <textarea name="{{$name}}" id="{{$id ?: $name}}" class="input"
              {{$model ? 'x-model='.$model : ''}}>{{$value}}</textarea>
    <small class="input-error {{!$errors->has($name) ? 'hidden' : ''}}"
           id="error-{{$id ?: $name}}">{{ $errors->first($name) }}</small>

</div>
