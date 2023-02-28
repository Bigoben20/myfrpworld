<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Character Details') }}
        </h2>
        <h3>

        </h3>
    </x-slot>

    <div class="py-6 md:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-2xl mb-20 md:mb-10">
                @livewire('character-details', [$id])
            </div>
        </div>
    </div>
</x-app-layout>
