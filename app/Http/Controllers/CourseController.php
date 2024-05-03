<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getAllCourses ()
    {
        try {
            $courses = Course::all();
            return response()->json(
                [
                    'success'=> true,
                    'message' => "Courses retrieved successfully",
                    'data' => $courses
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json()(
                [
                    'success'=> false,
                    'message' => "Courses cant be retrieved",
                    'error' => $th->getMessage()
                ],
                500
            );
        }
    }

    public function postCourse (Request $request) {
        try {
            $course = new Course;
            $course->title = $request->input('title');
            $course->description = $request->input('description');
            $course->save();

            return response()->json(
                [
                    'success' => true,
                    'message' => "Course create successfully",
                    'data' => $course
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json()(
                [
                    'success'=> false,
                    'message' => "Course cant be created",
                    'error' => $th->getMessage()
                ],
                500
            );
        }
    }
}
