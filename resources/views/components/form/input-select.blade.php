<div class="grid gap-y-2">
    <label for="{{$id ?: $name}}">{{__($title)}}</label>
    <select name="{{$name}}" id="{{$id ?: $name}}" class="input">
        @foreach($options as $optionValue => $tag)
            <option value="{{$optionValue}}" {{$value === $optionValue ? 'selected' : ''}}>{{$tag}}</option>
        @endforeach
    </select>
    <small class="input-error {{!$errors->has($name) ? 'hidden' : ''}}"
           id="error-{{$id ?: $name}}">{{ $errors->first($name) }}</small>

</div>
