@props(['level' => null])
@php
    $level = $level ?? 'h1';
@endphp

@switch($level)
    @case('h1')
        <h1 {{ $attributes->class(['text-5xl']) }}>
            {{ $slot }}
        </h1>
        @break
    @case('h2')
        <h2 {{ $attributes->class(['text-4xl']) }}>
            {{ $slot }}
        </h2>
        @break
    @case('h3')
        <h3 {{ $attributes->class(['text-3xl']) }}>
            {{ $slot }}
        </h3>
        @break
    @case('h4')
        <h4 {{ $attributes->class(['text-2xl']) }}>
            {{ $slot }}
        </h4>
        @break
    @case('h5')
        <h5 {{ $attributes->class(['text-xl']) }}>
            {{ $slot }}
        </h5>
        @break
    @case('h6')
        <h6 {{ $attributes->class(['text-lg']) }}>
            {{ $slot }}
        </h6>
        @break
    @default
@endswitch
