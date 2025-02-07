@props(['size' => 'small', 'tag'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300 ';

    if ($size == 'small') {
        $classes .= 'text-2xs px-3 py-1';
    } else if ($size == 'base') {
        $classes .= 'text-sm px-5 py-1';
    }
@endphp

<a href="/tags/{{ $tag->id }}" class="{{ $classes }}">{{ $tag->name }}</a>
