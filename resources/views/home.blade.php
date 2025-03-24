@extends('layouts.app')

@section('title', 'Home page')
@section('heading', 'Home Page')

@section('content')
    <a href="{{ route('students.index') }}" class="mb-4 inline-block rounded bg-green-500 px-4 py-2 text-white">Go to Students
        Section </a>
@endsection
