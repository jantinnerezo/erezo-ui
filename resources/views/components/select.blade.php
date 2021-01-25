<div
    x-data="Select.data({
        model: '{!! $attributes['wire:model'] !!}',
        class: '{!! $attributes['class'] !!}',
        placeholder: '{!! $attributes['placeholder'] !!}'
    })"
    x-init="onInit()"
    wire:ignore
>
    <select
        x-ref="{{ $attributes['wire:model'] }}"
        {{ $attributes->except('wire:model') }}
    >
        {{ $slot }}
    </select>
</div>