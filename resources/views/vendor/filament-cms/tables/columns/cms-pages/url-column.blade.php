@php
    $state = $getState() ?? [];
@endphp

@if (is_array($state))
    <ul>
        @foreach ($state as $item)
            @if($item['url'])
                <li class="py-2">
                    <x-filament::link 
                        target="_blank"
                        :href="$item['url']"
                        :icon="$item['icon'] ?? null"
                        :icon-position="$item['icon-position'] ?? 'before'"
                        style="text-decoration: none;"
                    >
                        <span class="font-light text-gray-500 text-sm">
                            {{ str($item['label'])->ucfirst() }} |
                        </span>
                        <span class="hover:underline">
                            {{ $item['url-display'] ?? $item['url'] }}
                        </span>
                    </x-filament::link>
                </li>
            @endif
        @endforeach
    </ul>
@endif