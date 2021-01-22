<div>
    <div class="relative">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
            {{ $label }}
        </label>
        <div class="inline-block w-full relative w-64">
            <div class="flex items-center border-b border-teal-500 py-2">
                <input
                    wire:model="search"
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" />
                <span wire:click="clear" class="absolute right-2 top-7 cursor-pointer">&#10006;</span>
            </div>
        </div>
    </div>
    <div>
        @if($showList)
        <ul class="bg-white opacity-70 -mt-2 py-2 h-28 overflow-auto">
            @foreach($items as $item)
                <li
                    wire:key="{{$model}}{{$item->id}}"
                    wire:click="setId({{ $item }})"
                    class="w-full px-2 cursor-pointer hover:bg-gray-200"
                >
                    {{ $item->$column }}
                </li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
