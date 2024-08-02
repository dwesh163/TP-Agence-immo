@extends("admin.admin")

@section("title", "Tous les options")


@section("content")
<div class="max-w-7xl mx-auto mt-6">

    <div class="flex justify-between mb-4">
        <h1 class="text-2xl">@yield("title")</h1>
        <a href="{{ route('admin.option.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter une options</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm text-left">
            <thead>
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nom</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($options as $option)
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $option->name }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                        <a href="{{ route('admin.option.edit', $option) }}" class="text-blue-600 hover:text-blue-900">Modifier</a>
                        <form action="{{ route('admin.option.destroy', $option) }}" method="POST" class="inline">
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

    <div class="my-4">
        {{ $options->links() }}
    </div>
</div>

@endsection
