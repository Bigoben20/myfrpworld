<div class="col-span-1 md:col-span-5">
    <div class="flex flex-col border border-gray-800 rounded-xl">

        {{-- header --}}
        <div class="bg-gray-700 rounded-t-lg px-2 py-1 flex justify-start items-center">
            <h2 class="text-slate-200 text-xl font-bold tracking-wide">Create Story</h2>
        </div>

        {{-- body --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 px-2 py-2">

            {{-- Name --}}
            <div class="flex flex-col  dark:text-gray-200">
                <label for="name">Name</label>
                <input type="text" wire:model.defer="storyName" id="name" placeholder="Story Name"
                    class="border border-gray-300 ddark:border-gray-500 rounded-lg focus:ring-sky-500 focus:ring-offset-0 dark:bg-gray-600 dark:text-gray-200">
            </div>

            {{-- Genre --}}
            <div class="flex flex-col  dark:text-gray-200">
                <label for="genre">Genre</label>
                <input type="text" wire:model.defer="storyGenre" id="genre" placeholder="Story Genre"
                    class="border border-gray-300 ddark:border-gray-500 rounded-lg focus:ring-sky-500 focus:ring-offset-0 dark:bg-gray-600 dark:text-gray-200">
            </div>
            
            {{-- Detail --}}
            <div class="flex flex-col  dark:text-gray-200">
                <label for="logline">Logline</label>
                <input type="text" wire:model.defer="storyLogline" id="logline" placeholder="Story logline" maxlength="255"
                    class="border border-gray-300 ddark:border-gray-500 rounded-lg focus:ring-sky-500 focus:ring-offset-0 dark:bg-gray-600">
            </div>
        </div>

        <div class="p-2">
            <x-generalButton color="green" class="px-12 w-full md:w-fit" wire:click="store">Save</x-generalButton>
        </div>
    </div>
</div>