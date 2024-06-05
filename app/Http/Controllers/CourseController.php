<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Galapunkts, lai pievienotu jaunu kursu
    public function store(Request $request)
    {
        // Validācija
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'banner_url' => 'nullable|url',
            'participant_count' => 'nullable|integer|min:0',
        ]);

        // Jauna kursa izveide
        $course = Course::create($request->all());

        return response()->json($course, 201);
    }

    // Galapunkts, lai iegūtu visus kursus
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }
}
