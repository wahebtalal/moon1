<div class="px-4 py-4 md:py-8">
    <div class="max-w-7xl mx-auto {{ $displaymode === 'full_width' ? 'w-full' : ($displaymode === 'thumbnail' ? 'w-32' : 'inline-block') }}">
        <a href="{{ $link ?? '#' }}" {{ $newtab ? 'target="_blank" rel="noopener noreferrer"' : '' }}>
            <img
                src="{{ asset('storage/' . $image) }}"
                alt="{{ $alt }}"
                title="{{ $title ?? $alt }}"
                width="{{ $width ?? 'auto' }}"
                height="{{ $height ?? 'auto' }}"
                class="rounded-md shadow {{ $displaymode === 'inline' ? 'align-middle' : '' }}"
            />
        </a>
        @if($caption)
            <p class="mt-2 text-sm text-gray-600">{{ $caption }}</p>
        @endif
    </div>
</div>
