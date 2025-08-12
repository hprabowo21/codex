<button {{ $attributes->merge([
    'class' => 'px-4 py-2 rounded-2xl bg-emerald-600 text-white hover:bg-emerald-700 shadow'
]) }}>
    {{ $slot }}
</button>
