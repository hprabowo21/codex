<header {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow p-4 flex items-center justify-between']) }}>
    <div class="text-emerald-600 font-semibold">{{ $title ?? 'Dashboard' }}</div>
    <div class="flex items-center space-x-4">
        {{ $slot }}
    </div>
</header>
