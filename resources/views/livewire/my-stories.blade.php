<div wire:ignore.self>
    <div>
        @if (session()->has('messageInfo'))
            <x-alert type="info">
                {{ session('messageInfo') }}
            </x-alert>
        @elseif(session()->has('message'))
            <x-alert type="success">
                {{ session('success') }}
            </x-alert>
        @elseif(session()->has('error'))
            <x-alert type="danger">
                {{ session('error') }}
            </x-alert>
        @endif
    </div>

    <ul class="mb-2 -ml-2 p-2 flex list-none flex-nowrap flex-row overflow-x-auto w-full justify-start items-center gap-2" id="pills-tab" role="tablist" data-te-nav-ref>
        <li role="presentation" class="flex">
            <x-pill-button hasLink="#create-story" id="create-story-tab" data-te-toggle="pill" data-te-target="#create-story" role="tab" aria-controls="create-story"
                aria-selected="true" class="data-[te-nav-active]:ring-2 data-[te-nav-active]:ring-sky-400 data-[te-nav-active]:dark:ring-sky-600 data-[te-nav-active]:ring-inset">
            Create Story
            </x-pill-button>
        </li>

        <li role="presentation" class="flex">
            <x-pill-button hasLink="#all-stories" id="all-stories-tab" data-te-toggle="pill" data-te-target="#all-stories" data-te-nav-active role="tab" aria-controls="all-stories"
                aria-selected="true" class="data-[te-nav-active]:ring-2 data-[te-nav-active]:ring-sky-400 data-[te-nav-active]:dark:ring-sky-600 data-[te-nav-active]:ring-inset">
            My Stories
            </x-pill-button>
        </li>
        
    </ul>
    <div class="mb-6">
        <div class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="all-stories" role="tabpanel" aria-labelledby="all-stories-tab" data-te-tab-active>
            @include('livewire.includes.stories.stories-table')
        </div>
        
        <div class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="create-story" role="tabpanel" aria-labelledby="create-story-tab">
            @include('livewire.includes.stories.story-create')
        </div>
    </div>
</div>
