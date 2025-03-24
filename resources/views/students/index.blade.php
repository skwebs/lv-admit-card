@extends('layouts.app')

@section('title', 'Student List')
@section('heading', 'Student List')

@section('content')
    <a href="{{ route('students.create') }}" class="mb-4 inline-block rounded bg-green-500 px-4 py-2 text-white">Add
        Student</a>

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
                            <button type="submit" class="rounded bg-red-500 px-2 py-1 text-white">Delete</button>
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
@endsection
