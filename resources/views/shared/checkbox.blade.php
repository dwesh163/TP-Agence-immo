@php
$class ??= null;
@endphp

<div @class(["space-y-2", $class])>
    <input type="hidden" name="{{ $name }}" value="0" />
    <label for="{{ $name }}" class="flex cursor-pointer items-start gap-4">
        <div class="flex items-center">
            &#8203;
            <input @checked(old($name, $value ?? false)) type="checkbox" class="size-4 rounded border-gray-300" id="{{ $name }}" />
        </div>

        <div>
            <strong class="font-medium text-gray-900"> {{ $label }} </strong>
        </div>
    </label>
    @error($name)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
