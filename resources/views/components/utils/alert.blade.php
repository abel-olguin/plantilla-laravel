@props([
    'type' => 'success',
])

@if (session()->has($type))
    <div class="alert alert-{{$type}} mb-4" x-data="{
        show: true
    }" x-show="show" x-transition x-transition.duration.500ms>
        <div class="flex justify-between items-center  h-14">
            <span class="pl-5">{{ session()->get($type) }}</span>
            <button class="h-full alert-close" x-on:click="show=false">
                <x-heroicon-o-x-mark class="w-5 font-bold"/>
            </button>
        </div>
    </div>
@endif
