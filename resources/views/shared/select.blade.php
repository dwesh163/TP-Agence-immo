@php
$label ??= null;
$class ??= null;
$type ??= 'text';
$name ??= '';
$value ??= '';
@endphp


<div @class([$class])>
    <label class="text-muted-foreground" for="{{ $name }}">{{ $label }}</label>
    <select class="w-full text-sm @error($name) border-red-500 @else border-gray-200 @enderror" id="{{ $name }}" name="{{ $name }}[]" {{ $multiple ? 'multiple' : '' }}>
        @foreach($options as $k => $v)
        <option @selected($value->contains($k)) value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>
    @error($name)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
