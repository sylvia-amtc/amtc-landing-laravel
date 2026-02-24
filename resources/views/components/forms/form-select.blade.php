@props([
    'label',
    'name',
    'options' => [],
    'placeholder' => 'Select an option',
    'required' => false,
    'error' => null
])

<div {{ $attributes->merge(['class' => 'form-field']) }}>
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-text-secondary mb-2">
            {{ $label }}
            @if($required)
                <span class="text-error">*</span>
            @endif
        </label>
    @endif

    <select
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $required ? 'required' : '' }}
        class="w-full px-4 py-3 bg-brand-surface border border-brand-border rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-brand-accent focus:border-transparent transition-all appearance-none @error($name) border-error @enderror"
    >
        @if($placeholder)
            <option value="" disabled {{ old($name) ? '' : 'selected' }}>{{ $placeholder }}</option>
        @endif

        @foreach($options as $value => $label)
            <option value="{{ $value }}" {{ old($name) == $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>

    @if($error || $errors->has($name))
        <p class="mt-2 text-sm text-error">
            {{ $error ?? $errors->first($name) }}
        </p>
    @endif
</div>
