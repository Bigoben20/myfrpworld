<div>
    @if (session('success'))
        <x-alert type='success'>
            {{ session('success') }}
        </x-alert>
    @endif

    {{-- create character --}}
    <div class="mb-2 flex p-2">
        <a href="{{ route('character.create') }}"
            class="text-gray-700 dark:text-gray-300 px-4 py-2 shadow-md bg-gray-50 hover:bg-gray-100 active:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 dark:active:bg-gray-600 rounded-xl">
            <i class="fa-solid fa-plus mr-1"></i> {{ __('Character') }}
        </a>
    </div>
    <div>
        @include('livewire.includes.characters.characters-table')
    </div>
</div>
