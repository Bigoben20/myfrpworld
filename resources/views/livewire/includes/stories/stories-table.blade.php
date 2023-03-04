<div class="overflow-x-auto shadow-md bg-white dark:bg-transparent rounded-2xl">
    <table class="w-full text-sm text-left text-slate-500 dark:text-slate-400">
        <thead class="text-xs uppercase text-slate-700 bg-slate-50 dark:bg-slate-700 dark:text-slate-400">
            <th scope="col" class="w-1 px-4 py-3">
                No
            </th>
            <th scope="col" class="px-4 py-3">
                Name
            </th>
            <th scope="col" class="px-4 py-3 ">
                Genre
            </th>
            <th scope="col" class="px-4 py-3 ">
                Logline
            </th>
            <th scope="col" class="px-4 py-3">
                Actions
            </th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @forelse ($myStories as $myStory)
                <tr class="border-y text-slate-900 dark:text-slate-300 dark:bg-slate-800 dark:border-slate-700">
                    <td class="px-4 py-2">
                        {{ $myStory->id }}
                    </td>

                    <td class="px-4 py-2">
                        <div class="flex items-center gap-2 text-sm ">
                            <!-- Avatar with inset shadow -->
                            <div class="relative flex items-center justify-center w-10 h-10 rounded-full text-slate-600 dark:text-slate-400">
                                <i class="text-lg fa-solid fa-dice-d6"></i>
                            </div>
                            <div>
                                <p class="font-semibold">{{ $myStory->name }}</p>
                            </div>
                        </div>

                    </td>
                    <td class="px-4 py-2">
                        {{ $myStory->genre }}
                    </td>
                    <td class="px-4 py-2 text-ellipsis">
                        {{ $myStory->summary }}
                    </td>
                    <td class="flex gap-2 px-4 py-3">
                        <div class="flex justify-center">
                            <div>
                              <div class="" data-te-dropdown-ref>
                                <button
                                  class="rounded-full hover:bg-gray-100 active:bg-gray-100 dark:hover:bg-gray-700 dark:active:bg-gray-600 w-10 h-10 text-xl"
                                  type="button"
                                  id="menuButton{{ $myStory->id }}"
                                  data-te-dropdown-toggle-ref
                                  aria-expanded="false"
                                  data-te-ripple-init
                                  data-te-ripple-color="dark">
                                  <i class="fa-solid fa-ellipsis-vertical"></i>
                                  
                                </button>
                                <ul
                                  class="absolute z-[1000] float-left m-0 p-2 hidden min-w-max list-none overflow-hidden rounded-2xl border border-gray-200 dark:bg-gray-600 bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-gray-700 [&[data-te-dropdown-show]]:flex [&[data-te-dropdown-show]]:flex-col [&[data-te-dropdown-show]]:justify-center [&[data-te-dropdown-show]]:items-stretch"
                                  aria-labelledby="menuButton{{ $myStory->id }}"
                                  data-te-dropdown-menu-ref>
                                  <li class="flex">
                                    <a href="/my-stories/{{ $myStory->id }}"
                                        class="rounded-full hover:bg-gray-100 active:bg-gray-100 dark:hover:bg-gray-400/20 dark:active:bg-gray-600 w-10 h-10 text-xl flex justify-center items-center">
                                        <i class="fa-solid fa-gear"></i>
                                    </a>
                                  </li>
                                  <li class="flex">
                                    <button wire:click="destroy({{ $myStory->id }})" data-te-toggle="modal" data-te-target="#deleteModal" data-te-ripple-init data-te-ripple-color="warning" type="button"
                                        class="rounded-full text-red-600 hover:bg-red-100 active:bg-red-100 dark:hover:bg-red-500/20 dark:active:bg-red-600 w-10 h-10 text-xl flex justify-center items-center">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                    </td>
                </tr>
            @empty
                <tr class="border-none text-slate-900 dark:text-slate-300 dark:bg-slate-800 dark:border-slate-700 -m">
                    <td colspan="7" class="px-6 py-4 text-center">
                        <h1 class="text-2xl font-bold">Hiç karakteriniz bulunmamaktadır</h1>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- delete modal --}}
