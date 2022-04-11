@props(['variant'])

@php

$classes = 'border border-transparent rounded-md py-2 px-6 flex items-center justify-center font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2';

if ($variant == 'warning') {
    $classes = $classes . ' bg-orange-400 hover:bg-orange-500 focus:ring-orange-300';
} elseif ($variant == 'primary') {
    $classes = $classes . ' bg-emerald-400 hover:bg-emerald-500 focus:ring-emerald-300';
}

@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>