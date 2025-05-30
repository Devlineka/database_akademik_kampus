<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return Course::all();
    }

    public function show($id)
    {
        return Course::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|string|unique:courses',
            'name' => 'required|string',
            'code' => 'required|string',
            'credits' => 'required|string',
            'semester' => 'required|string',
        ]);

        return Course::create($validated);
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return $course;
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return response()->json(['message' => 'Course deleted']);
    }
}
