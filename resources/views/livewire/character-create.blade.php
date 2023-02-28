<div class="max-w-7xl mx-auto sm:px-6 lg:px-8" wire:ignore.self>
    <div class="mb-4">
        @if ($errors->any())
            @php
                $skillcount = 0;
            @endphp
            @foreach ($errors->all() as $error)
                @if ($skillcount >= 1)
                    @php
                        break;
                    @endphp
                @else
                    <x-alert type='error'>
                        {{ $error }}
                    </x-alert>
                    @if ($error == 'All skills has to be set.')
                        @php
                            $skillcount++;
                        @endphp
                    @endif
                @endif
            @endforeach
        @endif
    </div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-2xl mb-16">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <form wire:submit.prevent="store" method="post">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4 relative">
                    {{-- name, type and story --}}
                    <div class="col-span-1 md:col-span-5">
                        <div class="flex flex-col border border-gray-800 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-t-lg px-2 py-1 flex justify-start items-center">
                                <h2 class="text-slate-200 text-xl font-bold tracking-wide">Character</h2>
                            </div>

                            {{-- body --}}
                            <div class="grid grid-cols-3 gap-2 px-2 py-2">

                                {{-- Name --}}
                                <div class="flex flex-col">
                                    <label for="name">Name</label>
                                    <input type="text" wire:model="myCharacterName" id="name" placeholder="Character name"
                                        class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>

                                {{-- Type --}}
                                <div class="flex flex-col">
                                    <label for="type">Type</label>
                                    <select type="text" wire:model="myCharacterType" id="type" placeholder="Type" class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                        <option value=""> Choose a type</option>
                                        @forelse ($types as $type)
                                            <option value="{{ $type[1] }}"><span class="capitalize">{{ $type[0] }}</span></option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                {{-- Story --}}
                                <div class="flex flex-col">
                                    <label for="story">Story</label>
                                    <select type="text" wire:model="myCharacterStory" id="story" placeholder="High Concept"
                                        class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                        <option value="none"> None</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- left side --}}
                    <div class="flex flex-col gap-4 col-span-1 md:col-span-3">
                        {{-- aspects --}}
                        <div class="flex flex-col border border-gray-800 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-t-lg px-2 py-1 flex justify-start items-center">
                                <h2 class="text-slate-200 text-xl font-bold tracking-wide">Aspects</h2>
                            </div>

                            {{-- body --}}
                            <div class="flex flex-col px-2 py-2">
                                <div class="flex flex-col">
                                    <label for="hc">High Concept</label>
                                    <input type="text" wire:model="highConcept" id="hc" placeholder="High Concept"
                                        class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                                <div class="flex flex-col">
                                    <label for="t">Trouble</label>
                                    <input type="text" wire:model="trouble" id="t" placeholder="Trouble" class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                                <div class="flex flex-col">
                                    <label for="r">Relationship</label>
                                    <input type="text" wire:model="relationship" id="r" placeholder="Relationship"
                                        class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                                <div class="flex flex-col">
                                    <label for="a">Aspect</label>
                                    <input type="text" wire:model="aspect" id="a" placeholder="Aspect" class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                                <div class="flex flex-col">
                                    <label for="a2">Aspect</label>
                                    <input type="text" wire:model="aspect2" id="a2" placeholder="Aspect" class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                            </div>
                        </div>

                        {{-- stunts --}}
                        <div class="flex flex-col gap-2 border border-gray-800 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-t-lg px-2 py-1">
                                <h2 class="text-slate-200 text-xl font-bold tracking-wide">Stunts</h2>
                            </div>

                            {{-- body --}}
                            <div class="flex flex-col gap-2 px-2 pb-2">
                                <div class="flex flex-col">
                                    <textarea placeholder="Stunts" rows="31" wire:model="stunts" class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0"></textarea>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex justify-center items-center gap-2">
                                        <input class="appearance-none w-16 h-16 pl-4 pr-2 bg-slate-200 border-none text-3xl focus:ring-0 rounded-full" type="number" value="3"
                                            wire:model="refresh" min="0">
                                        <h3 class="text-lg md:text-3xl">Refresh</h3>
                                    </div>
                                    <div class="flex justify-center items-center gap-2">
                                        <h3 class="text-lg md:text-3xl">Fate Points</h3>
                                        <input class="appearance-none w-16 h-16 pl-4 pr-2 bg-slate-200 border-none text-3xl focus:ring-0 rounded-full" type="number" value="3"
                                            wire:model="fp" min="0">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- right side --}}
                    <div class="flex flex-col gap-4 col-span-1 md:col-span-2">
                        {{-- vitals --}}
                        <div class="flex flex-col border border-gray-800 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-t-lg px-2 py-1 flex justify-start items-center">
                                <h2 class="text-slate-200 text-xl font-bold tracking-wide">Vitals</h2>
                            </div>

                            {{-- body --}}
                            <div class="flex flex-col p-2 gap-2">
                                <div class="grid grid-cols-[auto_auto] grid-rows-2 gap-2">
                                    <label for="" class="text-lg lg:text-2xl">Physical</label>
                                    <div class="flex items-center justify-between">
                                        <input type="checkbox" wire:model="physicalcheck.0" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physicalcheck.1" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physicalcheck.2" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physicalcheck.3" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physicalcheck.4" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physicalcheck.5" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    </div>

                                    <label for="p" class="text-lg lg:text-2xl">Mental</label>
                                    <div class="flex gap-2 items-center  justify-between">
                                        <input type="checkbox" wire:model="mentalcheck.0" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mentalcheck.1" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mentalcheck.2" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mentalcheck.3" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mentalcheck.4" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mentalcheck.5" placeholder="1"
                                            class="border border-gray-300 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    </div>
                                </div>

                                <div class="flex gap-2 items-center">
                                    <label for="2" class="text-4xl">2</label>
                                    <input type="text" wire:model="mid" id="2" placeholder="Mid"
                                        class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                                </div>
                                <div class="flex  gap-2 items-center">
                                    <label for="4" class="text-4xl">4</label>
                                    <input type="text" wire:model="moderate" id="4" placeholder="Moderate"
                                        class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                                </div>
                                <div class="flex  gap-2 items-center">
                                    <label for="6" class="text-4xl">6</label>
                                    <input type="text" wire:model="severe" id="6" placeholder="Severe"
                                        class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                                </div>
                                <div class="flex  gap-2 items-center">
                                    <label for="8" class="text-4xl">8</label>
                                    <input type="text" wire:model="changer" id="8" placeholder="Character Changer"
                                        class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                                </div>
                            </div>
                        </div>

                        {{-- skills --}}
                        <div class="flex flex-col gap-2 border border-gray-800 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-t-lg px-2 py-1">
                                <h2 class="text-slate-200 text-xl font-bold tracking-wide">Skills</h2>
                            </div>

                            {{-- body --}}
                            <div class="flex flex-col gap-2 px-2 pb-2">
                                @foreach ($skills as $skill)
                                    <div class="flex items-center gap-2">
                                        <input class="appearance-none w-20 h-10 pl-4 pr-2 border-slate-200 text-xl focus:ring-0 rounded-lg" type="number" wire:model="{{ $skill }}">
                                        <h3 class="text-lg md:text-xl capitalize">{{ $skill }}</h3>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    {{-- save button --}}
                    <div class="fixed flex justify-center items-center gap-4 bottom-5 left-0 right-0 w-full">
                        <div
                            class="px-5 py-5 bg-white/30 dark:bg-gray-400/30 backdrop-blur-md shadow-xl border border-slate-200 dark:border-slate-600
                            flex justify-end items-center max-w-[90%] md:max-w-[50%] rounded-2xl">
                            <div class="text-md md:text-2xl text-gray-700 dark:text-gray-400 mr-5 font-bold tracking-wider">
                                Create Character
                            </div>
                            <button type="submit"
                                class="px-10
                                py-2.5
                                bg-green-500
                                text-white
                                font-medium
                                text-md
                                leading-tight
                                rounded-xl
                                hover:bg-green-600 hover:shadow-lg
                                focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0
                                active:bg-green-700 active:shadow-lg">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>