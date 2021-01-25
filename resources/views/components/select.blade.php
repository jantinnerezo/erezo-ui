<div
    x-data="Select.data({
        model: '{!! $attributes['wire:model'] ?? $attributes['name'] !!}',
        placeholder: '{!! $attributes['placeholder'] !!}',
        native: {!! $attributes->has('native') ? 1 : 0 !!}
    })"
    x-init="onInit()"
    wire:ignore
>
    <select
        x-ref="{{ $attributes['wire:model'] ?? $attributes['name'] }}"
        {{ $attributes->except('wire:model') }}
    >
        {{ $slot }}
    </select>
    @if ($attributes->has('native') && $attributes->has('multiple'))
        <input type="hidden" readonly x-ref="selected" name="{{ $attributes['name'] }}">
    @endif
</div>