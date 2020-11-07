@props(['color','text'])

<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-{{ $color }}-100 text-{{ $color }}-800 capitalize">
    {{ $text }}
</span>