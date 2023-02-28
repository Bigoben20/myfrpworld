@props(['hasLink'])
@if ($hasLink != null)
    <a href="{{ $hasLink }}"
        {{ $attributes->merge(['class' => 'text-gray-700 dark:text-gray-300 px-4 py-2 shadow-md bg-gray-50 hover:bg-gray-100 active:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 dark:active:bg-gray-600 rounded-xl']) }}>
        {{ $slot }}
    </a>
@else
    <button class="text-gray-700 dark:text-gray-300 px-4 py-2 shadow-md bg-gray-50 hover:bg-gray-100 active:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 dark:active:bg-gray-600 rounded-xl">
        {{ $slot }}
    </button>
@endif
