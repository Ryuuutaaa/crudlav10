<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function welcome()
    {
        $students  = Student::all();
        return view('welcome', compact('students'));
    }
}
