<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentViewController extends Controller
{
    public function index()
    {
        // Get students directly from the model
        $students = Student::all();

        // Send to view
        return view('students.index', compact('students'));
    }
}
