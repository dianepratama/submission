@switch($id)
    @case(1)
        <span class="text-yellow-700 bg-yellow-200 text-xs px-3 py-1 rounded">
        @break

        @case(2)
            <span class="text-green-700 bg-green-200 text-xs px-3 py-1 rounded">
                @break

            @case(3)
                <span class="text-red-800 bg-red-200 text-xs px-3 py-1 rounded">
                @break
            @endswitch

            {{ $slot }} </span>
            {{-- class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" --}}