<div>
    <div class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5 py-5">
        <div class="bg-white text-gray-800 rounded-xl shadow-lg overflow-hidden relative flex" style="width:414px;height:736px">
            <div class="bg-white h-full w-full overflow-y-auto">
                <div class="bg-blue-600 px-5 py-4 text-white">
                    <x-jet-application-logo/>
                </div>
                <div class="px-5 pt-6 pb-20">
                    <div class="flex justify-between">
                        <div class="mb-3">
                            <h1 class="text-2xl font-bold uppercase">Current Offers</h1>
                            <p class="text-sm text-gray-500 font-bold">All Offers</p>
                        </div>
                        <div>
                            <div class="text-xs text-center text-gray-500">Filters</div>
                            <div class="flex justify-center text-gray-600">
                                <a href="#" wire:click="openModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="p-4 shadow">
                        Testing
                    </div>
                </div>
            </div>
            
            
            <x-mobile-menu/>
        </div>
        @if($modal)
            @include('livewire.filters-modal')
        @endif
    </div>
    
</div>
