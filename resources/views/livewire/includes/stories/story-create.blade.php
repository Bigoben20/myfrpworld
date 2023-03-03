<div class="">
    @error('storyName')
        <x-alert type="danger">
            {{ $message }}
        </x-alert>
    @enderror
    @error('storyGenre')
        <x-alert type="danger">
            {{ $message }}
        </x-alert>
    @enderror
    @error('storyLogline')
        <x-alert type="danger">
            {{ $message }}
        </x-alert>
    @enderror
    <form wire:submit.prevent="store">

        <div class="flex flex-col border border-gray-800 rounded-xl" x-data="{name: '', genre:'', logline:''}">
            {{-- header --}}
            <div class="bg-gray-700 rounded-t-lg px-2 py-1 flex justify-start items-center">
                <h2 class="text-slate-200 text-xl font-bold tracking-wide">Create Story</h2>
            </div>

            {{-- body --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 px-2 py-2">

                {{-- Name --}}
                <div class="flex flex-col  dark:text-gray-200">
                    <label for="name">Name</label>
                    <input type="text" wire:model.defer="storyName" x-model="name" placeholder="Story Name"
                        class="border border-gray-300 ddark:border-gray-500 rounded-lg focus:ring-sky-500 focus:ring-offset-0 dark:bg-gray-600 dark:text-gray-200">
                </div>

                {{-- Genre --}}
                <div class="flex flex-col  dark:text-gray-200">
                    <label for="genre">Genre</label>
                    <input type="text" wire:model.defer="storyGenre" x-model="genre" placeholder="Story Genre"
                        class="border border-gray-300 ddark:border-gray-500 rounded-lg focus:ring-sky-500 focus:ring-offset-0 dark:bg-gray-600 dark:text-gray-200">
                </div>

                {{-- Detail --}}
                <div class="flex flex-col  dark:text-gray-200">
                    <label for="logline">Logline</label>
                    <input type="text" wire:model.defer="storyLogline" x-model="logline" placeholder="Story logline" maxlength="255"
                        class="border border-gray-300 ddark:border-gray-500 rounded-lg focus:ring-sky-500 focus:ring-offset-0 dark:bg-gray-600">
                </div>
            </div>

            <div class="p-2">
                <template x-if="name.length > 0 && genre.length > 0 && logline.length > 0">
                    <x-generalButton color="green" class="w-full md:w-fit" type="submit">Save</x-generalButton>
                </template>
                <template x-if="name.length < 1 || genre.length < 1 || logline.length < 1">
                    <button class="px-3 py-2.5 w-full md:w-fit bg-slate-500 opacity-50 text-white font-medium text-md leading-tight rounded-xl" type="button" disabled>Save</button>
                </template>
            </div>
        </div>
    </form>
</div>
