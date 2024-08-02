@extends("admin.admin")

@section("title", $property->exists ? "Modifier un bien" : "Ajouter un bien")

@section("content")
<div class="max-w-7xl mx-auto mt-5">
    <h1 class="text-2xl">@yield("title")</h1>
</div>

<form class="mt-3 space-y-4 mx-auto max-w-7xl" action="{{ $property->exists ? route('admin.property.update', $property->id) : route('admin.property.store', $property)}}" method="POST">
    @csrf
    @if($property->exists)
    @method('PUT')
    @endif

    <div class="flex space-x-4 justify-between">
        @include("shared.input", ["label" => "Titre", "name" => "title", "value" => $property->title, "class" => "w-full"])
        @include("shared.input", ["label" => "Surface", "name" => "surface", "type" => "number", "value" => $property->surface, "class" => "w-1/2"])
        @include("shared.input", ["label" => "Prix", "name" => "price", "type" => "number", "value" => $property->price, "class" => "w-1/2"])

    </div>
    @include("shared.input", ["label" => "Description", "name" => "description", "type" => "textarea", "value" => $property->description])


    <div class="flex flex-1 space-x-4 justify-between">
        @include("shared.input", ["label" => "Chambres", "name" => "bedrooms", "type" => "number", "value" => $property->bedrooms, "class" => "w-full"])
        @include("shared.input", ["label" => "Étage", "name" => "floor", "type" => "number", "value" => $property->floor, "class" => "w-full"])
        @include("shared.input", ["label" => "Pièces", "name" => "rooms", "value" => $property->rooms, "class" => "w-full"])
    </div>

    <div class="flex space-x-4 justify-between">
        @include("shared.input", ["label" => "Ville", "name" => "city", "value" => $property->city, "class" => "w-full"])
        @include("shared.input", ["label" => "Adresse", "name" => "address", "value" => $property->address, "class" => "w-full"])
        @include("shared.input", ["label" => "Code Postal", "name" => "postal_code", "value" => $property->postal_code, "class" => "w-full"])
    </div>

    @include("shared.select", ["name" => "options", "label" => "Options", "value" => $property->options()->pluck("id"), "multiple" => true, "options" => $options])
    @include("shared.checkbox", ["label" => "Vendu", "name" => "sold", "value" => $property->sold])

    <div class="mt-6">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            @if($property->exists)
            Modifier
            @else
            Créer
            @endif
        </button>
    </div>
</form>
@endsection
