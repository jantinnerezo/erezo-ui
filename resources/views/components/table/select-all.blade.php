@props(['data','all' => false, 'label'])
<x-ui::table.row class="bg-cool-gray-100" wire:key="row-message">
    <x-ui::table.cell colspan="13">
        @unless ($all)
        <div>
            <span>You have selected <strong>{{ $data->count() }}</strong> {{ $label }}, do you want to select all <strong>{{ $data->total() }}</strong>?</span>
            <x-ui::button.link wire:click="selectAll" class="ml-1 text-blue-600">
                Select All
            </x-ui::button.link>
        </div>
        @else
            <span>You are currently selecting all <strong>{{ $data->total() }}</strong> {{ $label }}.</span>
        @endif
    </x-ui::table.cell>
</x-ui::table.row>