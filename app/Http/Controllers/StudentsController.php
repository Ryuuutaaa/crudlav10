<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function welcome()
    {
        $students = Student::all();
        return view('welcome', compact('students'));
    }

    public function addStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string',

            'email' => 'required|string',

            'address' => 'required|string',
        ]);

        $student = new Student();
        $student->name = $request->input("name");
        $student->email = $request->input("email");
        $student->address = $request->input("address");

        $student->save();

        return redirect()->route('welcome');
    }


    public function updateStudent()
    {
    }
}
