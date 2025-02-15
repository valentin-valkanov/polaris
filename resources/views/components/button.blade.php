@props(['href' => '#', 'type' => 'button'])

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => 'bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg shadow-md transition duration-300']) }}>
    {{ $slot }}
</a>
