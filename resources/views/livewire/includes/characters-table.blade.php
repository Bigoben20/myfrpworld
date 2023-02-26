<div class="overflow-x-auto shadow-md bg-white dark:bg-transparent rounded-2xl">
    <table class="w-full text-sm text-left text-slate-500 dark:text-slate-400">
        <thead class="text-xs uppercase text-slate-700 bg-slate-50 dark:bg-slate-700 dark:text-slate-400">
            <th scope="col" class="w-1 px-4 py-3">
                No
            </th>
            <th scope="col" class="px-4 py-3 min-w-[200px]">
                Name
            </th>
            <th scope="col" class="px-4 py-3 ">
                Highconcept
            </th>
            <th scope="col" class="px-4 py-3 ">
                Story
            </th>
            <th scope="col" class="px-4 py-3 w-[250px]">
                Actions
            </th>
            </tr>
        </thead>
        <tbody class="bg-white border-b">
            @forelse ($myCharacters as $myCharacter)
                <tr class="border-y text-slate-900 dark:text-slate-300 dark:bg-slate-800 dark:border-slate-700">
                    <td class="px-4 py-2">
                        {{ $myCharacter->id }}
                    </td>

                    <td class="px-4 py-2">
                        <div class="flex items-center gap-2 text-sm ">
                            <!-- Avatar with inset shadow -->
                            <div class="relative flex items-center justify-center w-10 h-10 rounded-full text-slate-600 dark:text-slate-400">
                                <i class="text-lg fa-solid fa-dice-d6"></i>
                            </div>
                            <div>
                                <p class="font-semibold">{{ $myCharacter->name }}</p>
                                <p class="text-xs ">
                                    @if ($myCharacter->type == 1)
                                        NPC
                                    @elseif($myCharacter->type == 2)
                                        PC
                                    @else
                                        None
                                    @endif

                                </p>
                            </div>
                        </div>

                    </td>
                    <td class="px-4 py-2">
                        {{ $myCharacter->aspect->highconcept }}
                    </td>
                    <td class="px-4 py-2">
                    </td>
                    <td class="flex gap-2 px-4 py-3">
                        <a href="/my-characters/{{ $myCharacter->id }}"
                            class="px-3
                    py-2.5
                    bg-blue-500
                    text-white
                    font-medium
                    text-md
                    leading-tight
                    rounded-xl
                    hover:bg-blue-600 hover:shadow-lg
                    focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-700 active:shadow-lg"><i
                                class="fa-solid fa-gear"></i> Details</a>

                        <button wire:click="delete({{ $myCharacter->id }})" data-te-toggle="modal" data-te-target="#deleteModal" data-te-ripple-init data-te-ripple-color="warning" type="button"
                            class="px-3
                    py-2.5
                    bg-red-500
                    text-white
                    font-medium
                    text-md
                    leading-tight
                    rounded-xl
                    hover:bg-red-600 hover:shadow-lg
                    focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-red-700 active:shadow-lg"><i
                                class="fa-solid fa-trash"></i> Delete</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="px-6 py-4 text-center">
                        <h1 class="text-2xl font-bold">Hiç karakteriniz bulunmamaktadır</h1>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- delete modal --}}
@include('livewire.modals.myCharactersModals.deleteModal')
