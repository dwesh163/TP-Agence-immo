<a class="cursor-pointer" href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">
    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
        <img alt="" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="h-56 w-full object-cover" />

        <div class="bg-white p-4 sm:p-6">
            <span class="block text-xs text-gray-500"> {{ $property->surface }}m² - {{ $property->postal_code }} {{ $property->city }} </span>

            <h3 class="mt-0.5 text-lg text-gray-900">{{ $property->title }}</h3>

            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                {{ $property->description }}
            </p>
        </div>
    </article>
</a>

<!-- {{ number_format($property->price, 0, ".", " ") }} CHF -->
