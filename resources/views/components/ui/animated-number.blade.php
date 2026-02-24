@props([
    'target',
    'suffix' => '',
    'prefix' => ''
])

<span
    class="animate-number"
    data-target="{{ $target }}"
    {{ $attributes }}
>
    {{ $prefix }}0{{ $suffix }}
</span>
