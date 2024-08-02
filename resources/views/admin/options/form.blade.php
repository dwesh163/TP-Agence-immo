@extends("admin.admin")

@section("title", $option->exists ? "Modifier un option" : "Créer un option")

@section("content")
<div class="max-w-7xl mx-auto mt-5">
    <h1 class="text-2xl">@yield("title")</h1>
</div>

<form class="mt-3 space-y-4 mx-auto max-w-7xl" action="{{ $option->exists ? route('admin.option.update', $option->id) : route('admin.option.store', $option)}}" method="POST">
    @csrf
    @if($option->exists)
    @method('PUT')
    @endif

    @include("shared.input", ["label" => "Nom de l'option", "name" => "name", "value" => $option->name, "class" => "w-full"])

    <div class="mt-6">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            @if($option->exists)
            Modifier
            @else
            Créer
            @endif
        </button>
    </div>
</form>
@endsection
