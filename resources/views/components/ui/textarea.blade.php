<textarea {{ $attributes->merge([
    'class' => 'w-full rounded-2xl border-gray-300 focus:border-emerald-500 focus:ring-emerald-500'
]) }}>
    {{ $slot }}
</textarea>
