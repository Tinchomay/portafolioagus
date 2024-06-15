@props(['active'])

@php
$classes = ($active ?? false)
            ? 'p-2 text-green-300 hover:border-b-2 border-green-300 border-b-2 duration-200'
            : 'p-2 text-green-300 border-b-transparent border-b-2 hover:border-b-2 hover:border-green-300 duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="text-white"> {{ $numero ?? '' }}</span> {{ $slot }}
</a>