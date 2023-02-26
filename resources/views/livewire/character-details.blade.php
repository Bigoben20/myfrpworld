    <div wire:ignore.self class="container">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <form wire:submit.prevent='updateCharacter({{ $myCharacterId }})'>
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4 relative">
                    {{-- name, type and story --}}
                    <div class="col-span-1 md:col-span-5">
                        <div class="flex flex-col border border-gray-800 dark:border-gray-700 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-t-lg px-2 py-1 flex justify-start items-center">
                                <h2 class="text-slate-200 text-xl font-bold tracking-wide">Character</h2>
                            </div>

                            {{-- body --}}
                            <div class="grid grid-cols-3 gap-2 px-2 py-2">

                                {{-- name --}}
                                <div class="flex flex-col">
                                    <label for="name">Name</label>
                                    <input type="text" wire:model="myCharacterName"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>

                                {{-- Type --}}
                                <div class="flex flex-col">
                                    <label for="type">Type</label>
                                    <select type="text" wire:model="myCharacterType" id="type" placeholder="Type"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                        <option value="0"> None</option>
                                        @forelse ($types as $type)
                                            <option value="{{ $type[1] }}"><span class="capitalize">{{ $type[0] }}</span></option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                {{-- Story --}}
                                <div class="flex flex-col">
                                    <label for="story">Story</label>
                                    <select type="text" wire:model="story" id="story" placeholder="High Concept"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                        <option value="none"> None</option>
                                        {{-- @forelse ($stories as $story)
                                            <option value="{{ $story->id }}">{{ $story->wire:model }}</option>
                                        @empty
                                        @endforelse --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- left side --}}
                    <div class="flex flex-col gap-4 col-span-1 md:col-span-3">
                        {{-- aspects --}}
                        <div class="flex flex-col border border-gray-800 dark:border-gray-700 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-lg" id="accordion-aspect" data-accordion="collapse" data-active-classes="bg-gray-700">

                                <h2 id="aspects-heading" class="rounded-lg">
                                    <button type="button"
                                        class="bg-gray-700 hover:bg-sky-900 rounded-t-lg px-2 py-1 flex justify-start items-center w-full transition-transform ease-in-out duration-150"
                                        data-accordion-target="#aspects" aria-expanded="true" aria-controls="aspects">
                                        <span class="text-slate-200 text-xl font-bold tracking-wide">Aspects</span>
                                    </button>
                                </h2>

                            </div>


                            {{-- body --}}
                            <div class="flex flex-col px-2 py-2" id="aspects" aria-labelledby="aspects-heading">
                                <div class="flex flex-col">
                                    <label for="hc">High Concept</label>
                                    <input type="text" wire:model="highConcept" id="hc" placeholder="High Concept"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                                <div class="flex flex-col">
                                    <label for="t">Trouble</label>
                                    <input type="text" wire:model="trouble" id="t" placeholder="Trouble"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                                <div class="flex flex-col">
                                    <label for="r">Relationship</label>
                                    <input type="text" wire:model="relationship" id="r" placeholder="Relationship"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                                <div class="flex flex-col">
                                    <label for="a">Aspect</label>
                                    <input type="text" wire:model="aspect" id="a" placeholder="Aspect"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                                <div class="flex flex-col">
                                    <label for="a2">Aspect</label>
                                    <input type="text" wire:model="aspect2" id="a2" placeholder="Aspect"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                </div>
                            </div>
                        </div>

                        {{-- stunts --}}
                        <div class="flex flex-col gap-2 border border-gray-800  dark:border-gray-700 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-lg" id="accordion-stunts" data-accordion="collapse" data-active-classes="bg-gray-700">

                                <h2 id="stunts-heading">
                                    <button type="button"
                                        class="bg-gray-700 hover:bg-sky-900 rounded-t-lg px-2 py-1 flex justify-start items-center w-full transition-transform ease-in-out duration-150"
                                        data-accordion-target="#stunts" aria-expanded="true" aria-controls="stunts">
                                        <span class="text-slate-200 text-xl font-bold tracking-wide">Stunts</span>
                                    </button>
                                </h2>

                            </div>


                            {{-- body --}}
                            <div class="flex flex-col px-2 py-2" id="stunts" aria-labelledby="stunts-heading">
                                <div class="flex flex-col">
                                    <textarea placeholder="Stunts" rows="31" wire:model="stunts"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0"></textarea>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex justify-center items-center gap-2">
                                        <input class="appearance-none w-16 h-16 pl-4 pr-2 bg-slate-200 border-none text-3xl focus:ring-0 rounded-full" type="number" value="3"
                                            wire:model="refresh" min="0">
                                        <h3 class="text-lg md:text-3xl">Refresh</h3>
                                    </div>
                                    <div class="flex justify-center items-center gap-2">
                                        <h3 class="text-lg md:text-3xl">Fate Points</h3>
                                        <input class="appearance-none w-16 h-16 pl-4 pr-2 bg-slate-200 border-none text-3xl focus:ring-0 rounded-full" type="number" value="3" wire:model="fp"
                                            min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- right side --}}
                    <div class="flex flex-col gap-4 col-span-1 md:col-span-2">
                        {{-- vitals --}}
                        <div class="flex flex-col border border-gray-800  dark:border-gray-700 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-lg" id="accordion-vitals" data-accordion="collapse" data-active-classes="bg-gray-700">

                                <h2 id="vitals-heading">
                                    <button type="button"
                                        class="bg-gray-700 hover:bg-sky-900 rounded-t-lg px-2 py-1 flex justify-start items-center w-full transition-transform ease-in-out duration-150"
                                        data-accordion-target="#vitals" aria-expanded="true" aria-controls="vitals">
                                        <span class="text-slate-200 text-xl font-bold tracking-wide">Vitals</span>
                                    </button>
                                </h2>

                            </div>

                            {{-- body --}}
                            <div class="flex flex-col px-2 py-2" id="vitals" aria-labelledby="vitals-heading">
                                <div class="grid grid-cols-[auto_auto] grid-rows-2 gap-2">
                                    <label for="" class="text-lg lg:text-2xl">Physical</label>
                                    <div class="flex items-center justify-between">
                                        <input type="checkbox" wire:model="physical.0"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physical.1"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physical.2"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physical.3"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physical.4"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="physical.5"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    </div>

                                    <label for="p" class="text-lg lg:text-2xl">Mental</label>
                                    <div class="flex gap-2 items-center  justify-between">
                                        <input type="checkbox" wire:model="mental.0"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mental.1"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mental.2"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mental.3"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mental.4"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                        <input type="checkbox" wire:model="mental.5"
                                            class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    </div>
                                </div>

                                <div class="flex gap-2 items-center my-2">
                                    <label for="2" class="text-4xl">2</label>
                                    <input type="text" wire:model="mid" id="2" placeholder="Mid"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                                </div>
                                <div class="flex gap-2 items-center my-2">
                                    <label for="4" class="text-4xl">4</label>
                                    <input type="text" wire:model="moderate" id="4" placeholder="Moderate"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                                </div>
                                <div class="flex gap-2 items-center my-2">
                                    <label for="6" class="text-4xl">6</label>
                                    <input type="text" wire:model="severe" id="6" placeholder="Severe"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                                </div>
                                <div class="flex gap-2 items-center my-2">
                                    <label for="8" class="text-4xl">8</label>
                                    <input type="text" wire:model="changer" id="8" placeholder="Character Changer"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                                </div>
                            </div>
                        </div>

                        {{-- skills --}}
                        <div class="flex flex-col gap-2 border border-gray-800 dark:border-gray-700 rounded-xl">

                            {{-- header --}}
                            <div class="bg-gray-700 rounded-lg" id="accordion-skills" data-accordion="collapse" data-active-classes="bg-gray-700">

                                <h2 id="skills-heading">
                                    <button type="button"
                                        class="bg-gray-700 hover:bg-sky-900 rounded-t-lg px-2 py-1 flex justify-start items-center w-full transition-transform ease-in-out duration-150"
                                        data-accordion-target="#skills" aria-expanded="true" aria-controls="skills">
                                        <span class="text-slate-200 text-xl font-bold tracking-wide">Skills</span>
                                    </button>
                                </h2>

                            </div>

                            {{-- body --}}
                            <div class="flex flex-col px-2 py-2" id="skills" aria-labelledby="skills-heading">
                                @foreach ($skills as $skill)
                                    <div class="flex items-center gap-2 mb-2">
                                        <input class="appearance-none dark:bg-gray-700 w-20 h-10 pl-4 pr-2 border-slate-200 dark:border-slate-600 text-xl focus:ring-0 rounded-lg" type="number"
                                            wire:model="{{ $skill }}">
                                        <h3 class="text-lg md:text-xl capitalize font-semibold">{{ $skill }}</h3>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- save button --}}
                    <div
                        class="fixed flex justify-between md:justify-end items-center gap-4 bottom-0 left-0 right-0 w-full px-5 md:px-40 py-5 
                                bg-white dark:bg-gray-700 shadow border-t border-slate-200">
                        <div class="flex justify-center">
                            <div>
                                <div class="relative" data-te-dropdown-position="dropup">
                                    <button
                                        class="mt-1 flex items-center whitespace-nowrap rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none"
                                        type="button" id="notesButton" data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                        Dropup
                                        <span class="ml-2 w-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="px-10 md:px-20
                            shadow-md
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
            </form>
        </div>
    </div>
