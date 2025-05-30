<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseLecturer;

class CourseLecturerController extends Controller
{
    public function index()
    {
        return CourseLecturer::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|unique:course_lecturers',
            'course_id' => 'required|string|exists:courses,course_id',
            'lecturer_id' => 'required|string|exists:lecturers,lecturer_id',
            'role' => 'required|string',
        ]);

        $data = CourseLecturer::create($validated);
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return CourseLecturer::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $courseLecturer = CourseLecturer::findOrFail($id);
        $validated = $request->validate([
            'course_id' => 'sometimes|required|string|exists:courses,course_id',
            'lecturer_id' => 'sometimes|required|string|exists:lecturers,lecturer_id',
            'role' => 'sometimes|required|string',
        ]);

        $courseLecturer->update($validated);
        return response()->json($courseLecturer);
    }

    public function destroy($id)
    {
        $courseLecturer = CourseLecturer::findOrFail($id);
        $courseLecturer->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
