<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'class' => 'required',
            'roll_no' => 'required|integer'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'class' => 'required',
            'roll_no' => 'required|integer'
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }

    // admit card
    public function admitCard($id)
    {
        $student = Student::find($id);

        return view('students.admit-card', compact('student'));
    }

    public function admitCardAll()
    {
        // echo "Student admit card";
        $students = Student::all();
        // dd($students);
        return view('students.admit-card-all', compact('students'));
    }
}
