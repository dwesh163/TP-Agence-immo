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
                                <a class="{{ str_starts_with($route, '') ? $active : $default }}" href="/"> Acceuil </a>
                            </li>
                            <li>
                                <a class="{{ str_starts_with($route, 'property.') ? $active : $default }}" href="{{ route('property.index') }}"> Biens </a>
                            </li>


                        </ul>
                    </nav>
                </div>

            </div>
        </div>
        </div>
    </header>

    <div>
        @yield("content")
    </div>


</body>

</html>
