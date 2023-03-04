<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight capitalize">
            {{ __('story details') }}
        </h2>
    </x-slot>

    <div class="py-6 md:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden mb-20 md:mb-10">
                @livewire('story-details', [$id])
            </div>
        </div>
    </div>
</x-app-layout>
