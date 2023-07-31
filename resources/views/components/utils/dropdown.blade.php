<div class="dropdown-menu relative" x-data="{open: false}" @click.outside="open = false">

    <button x-on:click="open = !open" class="nav-link">{{$title}}</button>
    <div x-cloak x-show="open"
         x-transition x-transition.duration.500ms
         class="rounded border border-gray-200 rouded shadow-xl bg-white text-black absolute w-40 overflow-hidden z-10">
        {{$slot}}
    </div>
</div>
