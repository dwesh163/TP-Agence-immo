@php
$label ??= null;
$class ??= null;
$type ??= 'text';
$name ??= '';
$value ??= '';
@endphp


<div @class([$class])>
    <label class="text-muted-foreground" for="{{ $name }}">{{ $label }}</label>
    <input class="w-full rounded-lg p-3 border text-sm @error($name) border-red-500 @else border-gray-200 @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" />
    @error($name)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
