@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
    @if ($attributes->get('required'))
        <span class="text-danger">*</span>
    @endif
</label>
