@props([
    'label',
    'name',
    'type' => 'text',
    'placeholder' => '',
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

    @if($type === 'textarea')
        <textarea
            id="{{ $name }}"
            name="{{ $name }}"
            rows="4"
            placeholder="{{ $placeholder }}"
            {{ $required ? 'required' : '' }}
            class="w-full px-4 py-3 bg-brand-surface border border-brand-border rounded-xl text-white placeholder-text-muted focus:outline-none focus:ring-2 focus:ring-brand-accent focus:border-transparent transition-all @error($name) border-error @enderror"
        >{{ old($name) }}</textarea>
    @else
        <input
            type="{{ $type }}"
            id="{{ $name }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            value="{{ old($name) }}"
            {{ $required ? 'required' : '' }}
            class="w-full px-4 py-3 bg-brand-surface border border-brand-border rounded-xl text-white placeholder-text-muted focus:outline-none focus:ring-2 focus:ring-brand-accent focus:border-transparent transition-all @error($name) border-error @enderror"
        />
    @endif

    @if($error || $errors->has($name))
        <p class="mt-2 text-sm text-error">
            {{ $error ?? $errors->first($name) }}
        </p>
    @endif
</div>
