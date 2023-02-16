<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Character') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="/create" method="post">
                    <div class="grid grid-cols-1 md:grid-cols-2">

                        {{-- left side --}}
                        <div class="flex flex-col gap-4">
                            {{-- aspects --}}
                            <div class="flex flex-col gap-2 border border-gray-800 rounded-xl">

                                {{-- header --}}
                                <button class="bg-gray-700 rounded-t-lg px-2 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#aspects" aria-expanded="true" aria-controls="aspects">
                                    <h2 class="text-slate-200 text-xl font-bold tracking-wide">Aspects</h2>
                                </button>
                                
                                {{-- body --}}
                                <div class="collapse" id="aspects">
                                    <div class="flex flex-col px-2 pb-2" id="aspects">
                                        <div class="flex flex-col">
                                            <label for="hc">High Concept</label>
                                            <input type="text" name="highconcept" id="hc" placeholder="High Concept"
                                            class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="t">Trouble</label>
                                            <input type="text" name="trouble" id="t" placeholder="Trouble"
                                            class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="r">Relationship</label>
                                            <input type="text" name="relationship" id="r" placeholder="Relationship"
                                            class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="a">Aspect</label>
                                            <input type="text" name="aspect" id="a" placeholder="Aspect"
                                            class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="a2">Aspect</label>
                                            <input type="text" name="aspect2" id="a2" placeholder="Aspect"
                                            class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0">
                                        </div>
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
                                <div class="flex flex-col px-2 pb-2">
                                    <div class="flex flex-col">
                                        <textarea name="highconcept" placeholder="Stunts" rows="10"
                                        class="border border-gray-300 rounded-lg focus:ring-sky-500 focus:ring-offset-0"></textarea>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        {{-- right side --}}
                        <div>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
