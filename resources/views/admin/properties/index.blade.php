@extends("admin.admin")

@section("title", "Tous les biens")


@section("content")
<div class="max-w-7xl mx-auto mt-6">

    <div class="flex justify-between mb-4">
        <h1 class="text-2xl">@yield("title")</h1>
        <a href="{{ route('admin.property.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter un bien</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm text-left">
            <thead>
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Titre</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Surface</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Prix</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Ville</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($properties as $property)
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $property->title }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $property->surface }}m²</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ number_format($property->price, 0, ".", " ") }} €</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $property->city }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                        <a href="{{ route('admin.property.edit', $property) }}" class="text-blue-600 hover:text-blue-900">Modifier</a>
                        <form action="{{ route('admin.property.destroy', $property) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $properties->links() }}
    </div>
</div>

@endsection
