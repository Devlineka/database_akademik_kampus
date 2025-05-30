<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    // Get all lecturers
    public function index()
    {
        return response()->json(Lecturer::all(), 200);
    }

    // Create new lecturer
    public function store(Request $request)
    {
        $request->validate([
            'lecturer_id' => 'required|string|unique:lecturers,lecturer_id',
            'name' => 'required|string',
            'NIP' => 'required|string',
            'department' => 'required|string',
            'email' => 'required|email',
        ]);

        $lecturer = Lecturer::create($request->all());
        return response()->json($lecturer, 201);
    }

    // Show specific lecturer
    public function show($id)
    {
        $lecturer = Lecturer::find($id);
        return $lecturer ? response()->json($lecturer) : response()->json(['message' => 'Not Found'], 404);
    }

    // Update lecturer
    public function update(Request $request, $id)
    {
        $lecturer = Lecturer::find($id);
        if (!$lecturer) return response()->json(['message' => 'Not Found'], 404);

        $lecturer->update($request->all());
        return response()->json($lecturer);
    }

    // Delete lecturer
    public function destroy($id)
    {
        $lecturer = Lecturer::find($id);
        if (!$lecturer) return response()->json(['message' => 'Not Found'], 404);

        $lecturer->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
