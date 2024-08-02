@extends("base")
@section("title", "Tous nos biens")

@section("content")

<div class="max-w-7xl mx-auto mt-10">
    <h2 class="text-2xl text-center w-full">Tous nos biens</h2>
    <div class="justify-between gap-2 mt-4 grid grid-cols-4">
        @foreach($properties as $property)

        @include("property.card")

        @endforeach
    </div>

    {{ $properties->links() }}

</div>


@endsection
