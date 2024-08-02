<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
</head>

<body style="font-family: inter;">
    <header class="bg-white">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    IMMO AGENCE
                </div>

                @php
                $route = request()->route()->getName();
                $active = "text-gray-700 transition";
                $default = "text-gray-500 transition hover:text-gray-500/75";
                @endphp

                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="{{ str_starts_with($route, 'admin.property.') ? $active : $default }}" href="/admin/property"> Gérer les biens </a>
                            </li>

                            <li>
                                <a class="{{ str_starts_with($route, 'admin.option.') ? $active : $default }}" href="/admin/option"> Gérer les options </a>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
        </div>
        </div>
    </header>

    @if(session("success"))
    <div role="alert" class="rounded-xl border w-full border-gray-300 bg-white p-4 mx-auto max-w-7xl mt-6">
        <div class="flex items-start gap-4">
            <span class="text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>

            <div class="flex-1">
                <strong class="block font-medium text-gray-900"> Changes saved </strong>

                <p class="mt-1 text-sm text-gray-700">{{ session("success") }}</p>
            </div>
        </div>
    </div>
    @endif

    <div>
        @yield("content")
    </div>


</body>


<script>
    var select = new TomSelect("#options", {
        plugins: {
            remove_button: {
                title: "Supprimer",
            },
        },
    });
</script>

</html>
