@props(['options' => []])
<div
    x-data='{
        options: {
            valueNames:  @json($options)
        }
    }'
    x-init="
        new List($refs.table, this.options);
    "
    class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg"
    wire:ignore
    x-ref="table"
>
    <table class="min-w-full divide-y divide-cool-gray-200" >
        <thead>
            <tr>
                {{ $head }}
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-cool-gray-200 list">
            {{ $body }}
        </tbody>
    </table>
</div>