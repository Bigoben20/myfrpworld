@props(['color' => 'gray'])

<button {{ $attributes->merge(['class' => '
            px-3
            py-2.5
            bg-'.$color.'-500
            text-white
            font-medium
            text-md
            leading-tight
            rounded-xl
            hover:bg-'.$color.'-600 hover:shadow-lg
            focus:bg-'.$color.'-600 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-'.$color.'-700 active:shadow-lg']) }}>
    {{ $slot }}
</button>