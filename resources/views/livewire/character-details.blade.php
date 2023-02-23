    <div class="container">
        <div wire:ignore.self class="p-6 text-gray-900 dark:text-gray-100">
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

                            {{-- Name --}}
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
                                <select type="text" name="story" id="story" placeholder="High Concept"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                    <option value="none"> None</option>
                                    {{-- @forelse ($stories as $story)
                                            <option value="{{ $story->id }}">{{ $story->name }}</option>
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
                    <div class="flex flex-col border border-gray-800 dark:border-gray-700  rounded-xl">

                        {{-- header --}}
                        <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">

                            <h2 id="accordion-color-heading-1">
                                <button class="bg-gray-700 rounded-t-lg px-2 py-1 flex justify-start items-center" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                                    <span class="text-slate-200 text-xl font-bold tracking-wide">Aspects</span>
                                </button>
                            </h2>

                        </div>


                        {{-- body --}}
                        <div class="flex flex-col px-2 py-2" id="accordion-color-body-1" aria-labelledby="accordion-color-heading-1">
                            <div class="flex flex-col">
                                <label for="hc">High Concept</label>
                                <input type="text" name="highconcept" id="hc" placeholder="High Concept"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                            </div>
                            <div class="flex flex-col">
                                <label for="t">Trouble</label>
                                <input type="text" name="trouble" id="t" placeholder="Trouble"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                            </div>
                            <div class="flex flex-col">
                                <label for="r">Relationship</label>
                                <input type="text" name="relationship" id="r" placeholder="Relationship"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                            </div>
                            <div class="flex flex-col">
                                <label for="a">Aspect</label>
                                <input type="text" name="aspect" id="a" placeholder="Aspect"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                            </div>
                            <div class="flex flex-col">
                                <label for="a2">Aspect</label>
                                <input type="text" name="aspect2" id="a2" placeholder="Aspect"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                            </div>
                        </div>
                    </div>

                    {{-- stunts --}}
                    <div class="flex flex-col gap-2 border border-gray-800  dark:border-gray-700 rounded-xl">

                        {{-- header --}}
                        <div class="bg-gray-700 rounded-t-lg px-2 py-1">
                            <h2 class="text-slate-200 text-xl font-bold tracking-wide">Stunts</h2>
                        </div>

                        {{-- body --}}
                        <div class="flex flex-col gap-2 px-2 pb-2">
                            <div class="flex flex-col">
                                <textarea placeholder="Stunts" rows="31" name="stunts"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0"></textarea>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex justify-center items-center gap-2">
                                    <input class="appearance-none w-16 h-16 pl-4 pr-2 bg-slate-200 border-none text-3xl focus:ring-0 rounded-full" type="number" value="3" name="refresh"
                                        min="0">
                                    <h3 class="text-lg md:text-3xl">Refresh</h3>
                                </div>
                                <div class="flex justify-center items-center gap-2">
                                    <h3 class="text-lg md:text-3xl">Fate Points</h3>
                                    <input class="appearance-none w-16 h-16 pl-4 pr-2 bg-slate-200 border-none text-3xl focus:ring-0 rounded-full" type="number" value="3" name="fp"
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
                        <div class="bg-gray-700 rounded-t-lg px-2 py-1 flex justify-start items-center">
                            <h2 class="text-slate-200 text-xl font-bold tracking-wide">Vitals</h2>
                        </div>

                        {{-- body --}}
                        <div class="flex flex-col p-2 gap-2">
                            <div class="grid grid-cols-[auto_auto] grid-rows-2 gap-2">
                                <label for="" class="text-lg lg:text-2xl">Physical</label>
                                <div class="flex items-center justify-between">
                                    <input type="checkbox" name="physicalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="physicalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="physicalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="physicalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="physicalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="physicalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                </div>

                                <label for="p" class="text-lg lg:text-2xl">Mental</label>
                                <div class="flex gap-2 items-center  justify-between">
                                    <input type="checkbox" name="mentalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="mentalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="mentalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="mentalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="mentalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                    <input type="checkbox" name="mentalcheck[]" placeholder="1"
                                        class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-full focus:ring-sky-500 focus:ring-offset-0 p-3 lg:p-4">
                                </div>
                            </div>

                            <div class="flex gap-2 items-center">
                                <label for="2" class="text-4xl">2</label>
                                <input type="text" name="mid" id="2" placeholder="Mid"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                            </div>
                            <div class="flex  gap-2 items-center">
                                <label for="4" class="text-4xl">4</label>
                                <input type="text" name="moderate" id="4" placeholder="Moderate"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                            </div>
                            <div class="flex  gap-2 items-center">
                                <label for="6" class="text-4xl">6</label>
                                <input type="text" name="severe" id="6" placeholder="Severe"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                            </div>
                            <div class="flex  gap-2 items-center">
                                <label for="8" class="text-4xl">8</label>
                                <input type="text" name="changer" id="8" placeholder="Character Changer"
                                    class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:bg-gray-900 rounded-lg focus:ring-sky-500 focus:ring-offset-0 w-full">
                            </div>
                        </div>
                    </div>

                    {{-- skills --}}
                    <div class="flex flex-col gap-2 border border-gray-800 dark:border-gray-700 rounded-xl">

                        {{-- header --}}
                        <div class="bg-gray-700 rounded-t-lg px-2 py-1">
                            <h2 class="text-slate-200 text-xl font-bold tracking-wide">Skills</h2>
                        </div>

                        {{-- body --}}
                        <div class="flex flex-col gap-2 px-2 pb-2">
                            @foreach ($skills as $skill)
                                <div class="flex items-center gap-2">
                                    <input class="appearance-none w-20 h-10 pl-4 pr-2 border-slate-200 text-xl focus:ring-0 rounded-lg" type="number" name="{{ $skill }}">
                                    <h3 class="text-lg md:text-xl capitalize">{{ $skill }}</h3>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                {{-- save button --}}
                <div
                    class="fixed flex justify-between md:justify-end items-center gap-4 bottom-0 left-0 right-0 w-full px-5 md:px-40 py-5 
                                bg-white dark:bg-gray-700 shadow border-t border-slate-200">

                    <button
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
        </div>
    </div>
