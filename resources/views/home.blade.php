{{-- <!doctype html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
    </head>

    <body class="flex h-screen items-center justify-center bg-gray-100">
        <div class="w-full max-w-md rounded-lg bg-white p-8 shadow-md">
            <h1 class="mb-6 text-center text-2xl font-bold">Student Information Form</h1>
            <form action="" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <div>
                    <label class="block text-gray-700">Father's Name</label>
                    <input type="text" name="father_name"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <div>
                    <label class="block text-gray-700">Mother's Name</label>
                    <input type="text" name="mother_name"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <div>
                    <label class="block text-gray-700">Class</label>
                    <input type="text" name="class"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <div>
                    <label class="block text-gray-700">Roll No.</label>
                    <input type="number" name="roll_no"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <button type="submit"
                    class="w-full rounded-lg bg-blue-500 py-2 text-white hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </body>

</html> --}}
<!doctype html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
    </head>

    <body class="flex h-screen items-center justify-center bg-gray-100">
        <div class="w-full max-w-md rounded-lg bg-white p-8 shadow-md">
            <h1 class="mb-6 text-center text-2xl font-bold">Student Information Form</h1>
            {{-- <form action="" method="POST" class="space-y-4"> --}}
            <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <div>
                    <label class="block text-gray-700">Father's Name</label>
                    <input type="text" name="father_name"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <div>
                    <label class="block text-gray-700">Mother's Name</label>
                    <input type="text" name="mother_name"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <div>
                    <label class="block text-gray-700">Class</label>
                    <input type="text" name="class"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <div>
                    <label class="block text-gray-700">Roll No.</label>
                    <input type="number" name="roll_no"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required />
                </div>
                <button type="submit"
                    class="w-full rounded-lg bg-blue-500 py-2 text-white hover:bg-blue-600">Submit</button>
            </form>
        </div>

        <div class="mt-8 w-full max-w-2xl rounded-lg bg-white p-8 shadow-md">
            <h2 class="mb-4 text-center text-xl font-bold">Student List</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">Class</th>
                        <th class="border border-gray-300 px-4 py-2">Roll No.</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->class }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->roll_no }}</td>
                            <td class="flex space-x-2 border border-gray-300 px-4 py-2">
                                <a href="{{ route('students.edit', $student->id) }}"
                                    class="rounded bg-yellow-500 px-2 py-1 text-white">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="rounded bg-red-500 px-2 py-1 text-white">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody> --}}

                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->class }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->roll_no }}</td>
                            <td class="flex space-x-2 border border-gray-300 px-4 py-2">
                                <a href="{{ route('students.edit', $student->id) }}"
                                    class="rounded bg-yellow-500 px-2 py-1 text-white">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="rounded bg-red-500 px-2 py-1 text-white">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-4 text-center">No students found</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </body>

</html>
