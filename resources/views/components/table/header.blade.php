@php
    $order      = request()->input('order') === 'desc' ? 'asc' : 'desc';
    $orderBy    = request()->input('orderBy');
    $extra    = request()->input('search') ? '&search='.request()->input('search') : '';
@endphp
<thead class="bg-gray-900">
<tr>
    @foreach($headers as $key => $header)
        <th scope="col" class="px-6 py-4 font-medium text-gray-400">

            @if(in_array($key, $orderAtts))
                <a class="block flex items-center" href="?orderBy={{$key}}&order={{$order}}{{$extra}}">
                    {{  __($header) }}
                    @if($orderBy === $key)
                        @if($order === 'asc')
                            <x-heroicon-o-arrow-down class="w-3"/>
                        @else
                            <x-heroicon-o-arrow-up class="w-3"/>
                        @endif
                    @else
                        <x-heroicon-o-chevron-up-down class="w-3"/>

                    @endif
                </a>
            @else
                {{  __($header) }}

            @endif

        </th>

    @endforeach

</tr>
</thead>
