@props([
    'number' => '',
])

@if (session()->has('number'))
    <div class="fixed inset-0 bg-black/80 items-center flex z-20" x-data="{
        show: true
    }" x-show="show" x-transition x-transition.duration.500ms>
        <div class="grid gap-4 relative light-card mx-auto" @click.outside="show = false">
            <img src="/images/confetti.svg" class="h-60 w-60 mx-auto">
            <h2 class="text-3xl">{{__('Te has registrado a la rifa correctamente')}}!</h2>
            <h3 class="text-2xl">{{__('Tu numero de participacion es:')}}</h3>
            <h4 class="text-4xl font-bold">#{{session()->get('number')}}</h4>

            <div
                class="rounded-full bg-black/80 border border-gray-50 p-1 flex items-center absolute -top-5 -right-5 cursor-pointer"
                @click="show = false">
                <x-heroicon-o-x-mark class="w-5 h-5"/>
            </div>
        </div>
    </div>
@endif
