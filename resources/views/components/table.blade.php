<div
    class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg"
>
    <table {{ $attributes->merge(['class' => 'min-w-full divide-y divide-cool-gray-200']) }}>
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
