<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Character') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('character-create')
    </div>
</x-app-layout>
