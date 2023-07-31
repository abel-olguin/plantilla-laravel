@php use App\Notifications\EventWinner;use App\Notifications\NewSubscriber; @endphp
<div x-data="{open: false}" @click.outside="open = false"
     class="relative">

    <div
        class="relative rounded-full w-7 h-7 bg-yellow-500 flex items-center hover:bg-gray-200 text-gray-100 hover:text-gray-900 cursor-pointer"
        x-on:click="open = !open">
        <x-heroicon-o-bell class="w-5 mx-auto"/>
        @if(true)
            <span class="h-2 w-2 bg-red-600 animate-ping-slow top-0 right-0 absolute rounded-full"></span>
        @endif
    </div>

    <div x-cloak x-show="open"
         x-transition x-transition.duration.500ms
         class="rounded border border-gray-200 rouded shadow-xl bg-white text-black absolute w-60 divide-y overflow-hidden z-10 right-0">
        @foreach($notifications as $notification)

            <x-utils.dropdown-item>
                <a href="{{ route('notifications.show', $notification->id) }}">
                    @if($notification->type === EventWinner::class)
                        {{ __('Has ganado una rifa!') }}
                    @endif

                    @if($notification->type === NewSubscriber::class)
                        {{ __('Nuevo participante en tu rifa!') }}
                    @endif
                </a>

            </x-utils.dropdown-item>
        @endforeach
    </div>
</div>


