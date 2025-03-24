{{-- <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Student</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-gray-100 p-10">
        <div class="mx-auto max-w-md rounded-lg bg-white p-6 shadow-md">
            <h1 class="mb-6 text-center text-2xl font-bold">Add Student</h1>

            <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" class="w-full rounded-lg border px-4 py-2" required />
                </div>
                <div>
                    <label class="block text-gray-700">Father's Name</label>
                    <input type="text" name="father_name" class="w-full rounded-lg border px-4 py-2" required />
                </div>
                <div>
                    <label class="block text-gray-700">Mother's Name</label>
                    <input type="text" name="mother_name" class="w-full rounded-lg border px-4 py-2" required />
                </div>
                <div>
                    <label class="block text-gray-700">Class</label>
                    <input type="text" name="class" class="w-full rounded-lg border px-4 py-2" required />
                </div>
                <div>
                    <label class="block text-gray-700">Roll No.</label>
                    <input type="number" name="roll_no" class="w-full rounded-lg border px-4 py-2" required />
                </div>
                <button type="submit" class="w-full rounded-lg bg-blue-500 py-2 text-white">Submit</button>
            </form>

            <a href="{{ route('students.index') }}" class="mt-4 block text-center text-blue-500">Back to List</a>
        </div>
    </body>

</html> --}}
@extends('layouts.app')

@section('title', 'Add Student')
@section('heading', 'Add Student')

@section('content')
    <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" class="w-full rounded-lg border px-4 py-2" required />
        </div>
        <div>
            <label class="block text-gray-700">Father's Name</label>
            <input type="text" name="father_name" class="w-full rounded-lg border px-4 py-2" required />
        </div>
        <div>
            <label class="block text-gray-700">Mother's Name</label>
            <input type="text" name="mother_name" class="w-full rounded-lg border px-4 py-2" required />
        </div>
        <div>
            <label class="block text-gray-700">Class</label>
            <input type="text" name="class" class="w-full rounded-lg border px-4 py-2" required />
        </div>
        <div>
            <label class="block text-gray-700">Roll No.</label>
            <input type="number" name="roll_no" class="w-full rounded-lg border px-4 py-2" required />
        </div>
        <button type="submit" class="w-full rounded-lg bg-blue-500 py-2 text-white">Submit</button>
    </form>

    <a href="{{ route('students.index') }}" class="mt-4 block text-center text-blue-500">Back to List</a>
@endsection
