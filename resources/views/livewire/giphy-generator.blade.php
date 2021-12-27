<div>
    <div>
        @if (flash()->message)
            <div x-data="{ show: @entangle('showFlash') }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                 class="{{ flash()->class }}">
                {{ flash()->message }}
            </div>
        @endif
    </div>
    <div class="mt-10 grid grid-cols-3 gap-4" x-data="{}">
        <button wire:click="setMode('random')" x-on:click="clearInterval(window.infinite);"
            @class (["flex","space-x-2", "items-center", "justify-center", "text-sans", "bg-yellow-500", "bg-yellow-200" => $selectedMode === 'random'    , "rounded-md", "p-2", "text-red-800" ])>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
            </svg>
            <span>Random</span>
        </button>
        <button wire:click="setMode('search')" x-on:click="clearInterval(window.infinite);"
            @class (["flex","space-x-2", "items-center", "justify-center", "text-sans", "bg-yellow-500", "bg-yellow-200" => $selectedMode === 'search'    , "rounded-md", "p-2", "text-red-800" ])>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span>Search</span>
        </button>
        <button wire:click="setMode('infinite')"
                x-on:click="window.infinite = setInterval(() => { window.livewire.emit('reload'); }, 10000);"
            @class (["flex","space-x-2", "items-center", "justify-center", "text-sans", "bg-yellow-500", "bg-yellow-200" => $selectedMode === 'infinite'    , "rounded-md", "p-2", "text-red-800" ])>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span>Infinite</span>
        </button>
        @if($selectedMode==='search')
            <div class="col-span-3">
                <x-input class="w-full px-3 py-1" wire:model="searchInput" wire:keydown.debounce.450ms="search"
                         placeholder="search for something..."
                ></x-input>
            </div>
        @endif
    </div>
    <div class="mt-8 bg-white bg-gray-800 overflow-hidden shadow rounded-lg">
        <div class="grid grid-cols-1">
            <div class="p-6">
                <div class="flex items-center justify-center">
                    <div wire:loading wire:target="search, nextGiphy" class="loader">Loading...</div>
                    <image src="{{ $output }}">
                </div>
            </div>
        </div>
        <div class="flex justify-center cursor-pointer" wire:click="nextGiphy">
            <a class="bg-yellow-500 w-full p-4 text-red-800 text-4xl font-deco text-center">NEXT</a>
        </div>
    </div>

    <div class="mt-4">
        <div class="text-center text-sm text-gray-500 grid grid-cols-1">
            <!--
            <div class="flex justify-center inline">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                    <path
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>

                <a href="#" class="ml-1 underline">
                    Save
                </a>
            </div>
            -->
            <div class="flex justify-center inline">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                </svg>

                <a class="ml-1 underline">
                    <a href="{{ $output }}" target="_blank">Get Giphy URL</a>
                </a>
            </div>
        </div>
    </div>
</div>

