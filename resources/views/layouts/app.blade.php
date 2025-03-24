<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - Student Management</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-gray-100">

        <div class="p-10">
            <div class="mx-auto max-w-4xl rounded-lg bg-white p-6 shadow-md">
                <h1 class="mb-6 text-center text-2xl font-bold">@yield('heading')</h1>

                {{-- Flash Message --}}
                @if (session('success'))
                    <div class="mb-4 rounded bg-green-100 p-3 text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Main Content --}}
                @yield('content')
            </div>
        </div>

    </body>

</html>
