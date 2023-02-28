<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-14 min-[576px]:max-w-[500px]">
        <div
            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-2xl border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-gray-800">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-2xl border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 dark:bg-slate-700">
                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="deleteModalLabel">
                    Delete Character
                </h5>
                <button type="button" class="text-gray-700 dark:text-gray-300 box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss
                    aria-label="Close">
                    <i class="fa-solid fa-x"></i>
                </button>
            </div>
            <div class="relative flex-auto py-4 px-6 dark:text-gray-50" data-te-modal-body-ref>
                Are you sure want to <span class="text-danger font-bold">delete</span> your character?
            </div>
            <div class="flex flex-shrink-0 flex-wrap items-center justify-between rounded-b-2xl border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 dark:bg-slate-700">
                <button type="button"
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
                active:bg-blue-700 active:shadow-lg"
                    data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="info">
                    Close
                </button>

                <x-generalButton color="red" wire:click="destroy()" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="warning" type="button">
                    Delete
                </x-generalButton>
            </div>
        </div>
    </div>
</div>
