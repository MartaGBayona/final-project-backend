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

    public function putCourse (Request $request, $id)
    {
        try {
            $course = Course::find($id);
            if (!$course) {
                return response()->json([
                    "success" => false,
                    "message" => "Course not found",
                ], 404);
            }
            $updateData = $request->only(['title', 'description']);
            $course->update($updateData);

            return response()->json([
                "success" => true,
                "message" => "Course updated successfully",
                "data" => $course
            ], 
            200
        );
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Course cant be updated",
                "error" => $th->getMessage()
            ],
            500
            );
        }
    }

    public function deleteCourse ($id)
    {
        try {
            $course_deleted = Course::destroy($id);

            if (!$course_deleted) {
                return response()->json([
                    "success" => false,
                    "message" => "Course not found",
                ], 404);
            }

            return response()->json([
                "success" => true,
                "message" => "Course deleted successfully",
            ], 
            200
        );
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Course cant be deleted",
                "error" => $th->getMessage()
            ],
            500
            );
        }
    }

    public function getCourseById ($id)
    {
        try {
            $course = Course::find($id);
            if (!$course) {
                return response()->json([
                    "success" => false,
                    "message" => "Course not found",
                ], 404);
            }

            return response()->json([
                "success" => true,
                "message" => "Course retrieved successfully",
                "data" => $course
            ], 
            200
        );
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Course cant be retrieved",
                "error" => $th->getMessage()
            ],
            500
            );
        }
    }
}
