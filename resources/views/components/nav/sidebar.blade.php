<aside {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow p-6']) }}>
    <nav class="space-y-2">
        {{ $slot }}
    </nav>
</aside>
