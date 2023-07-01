@props([
    'label'
])

<div>
    <label class="block text-sm font-medium leading-5 text-gray-700 dark:text-white">{{ $label }}</label>
    <div class="mt-2 px-4">
        {{ $slot }}
    </div>
</div>
