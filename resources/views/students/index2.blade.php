<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student List</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-gray-100 p-10">
        <div class="mx-auto max-w-4xl rounded-lg bg-white p-6 shadow-md">
            <h1 class="mb-6 text-center text-2xl font-bold">Student List</h1>

            <a href="{{ route('students.create') }}"
                class="mb-4 inline-block rounded bg-green-500 px-4 py-2 text-white">Add Student</a>

            @if (session('success'))
                <div class="mb-4 rounded bg-green-100 p-3 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <table class="mt-4 w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">Class</th>
                        <th class="border border-gray-300 px-4 py-2">Roll No.</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
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
