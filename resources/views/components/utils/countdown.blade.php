@props([
    'remaining' => 0,
])
<div x-data="countdown({{$remaining}})" class="flex space-x-4 text-xl">
    <div><span x-text="time().days" class="font-bold"></span> <span>{{__('Dias')}}</span></div>
    <div><span x-text="time().hours" class="font-bold"></span> <span>{{__('Horas')}}</span></div>
    <div><span x-text="time().minutes" class="font-bold"></span> <span>{{__('Minutos')}}</span></div>
    <div><span x-text="time().seconds" class="font-bold"></span> <span>{{__('Segundos')}}</span></div>
</div>
