<table {{ $attributes->merge(['class' => 'min-w-full text-left text-sm']) }}>
    <thead class="bg-gray-50 text-gray-700">
        {{ $head ?? '' }}
    </thead>
    <tbody class="bg-white divide-y divide-gray-100">
        {{ $slot }}
    </tbody>
</table>
