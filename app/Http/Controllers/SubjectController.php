<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function getAllSubjects ()
    {
        try {
            $subjects = Subject::all();
            return response()->json(
                [
                    'success'=> true,
                    'message' => "Courses retrieved successfully",
                    'data' => $subjects
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success'=> false,
                    'message' => "Courses cant be retrieved",
                    'error' => $th->getMessage()
                ],
                500
            );
        }
    }

    public function getAllSubjectsInCourse($courseId)
    {
        try {
            $course = Course::find($courseId);

            if (!$course) {
                return response()->json([
                    'success' => false,
                    'message' => "Course not found",
                ], 404);
            }
            $subjects = Subject::where('course_id', $courseId)->get();
            return response()->json(
            [
                'success' => true,
                'message' => "Subjects retrieved successfully for course $courseId",
                'data' => $subjects
            ], 
            200
        );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success'=> false,
                    'message' => "Courses cant be retrieved",
                    'error' => $th->getMessage()
                ],
                500
            );
        }
    }

    public function postSubject (Request $request, $courseId) {
        try {
            $course = Course::find($courseId);
            if (!$course) {
                return response()->json([
                    'success' => false,
                    'message' => "Course not found",
                ], 404);
            }
            $subject = new Subject;
            $subject->title = $request->input('title');
            $subject->description = $request->input('description');
            $subject->course_id = $courseId;
            $subject->save();

            return response()->json(
                [
                    'success' => true,
                    'message' => "Subject create successfully",
                    'data' => $subject
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success'=> false,
                    'message' => "Subject cant be created",
                    'error' => $th->getMessage()
                ],
                500
            );
        }
    }

    public function putSubject (Request $request, $id)
    {
        try {
            $subject = Subject::find($id);
            if (!$subject) {
                return response()->json(
                [
                    "success" => false,
                    "message" => "Subject not found",
                ], 404);
            }
            $updateData = $request->only(['title', 'description']);
            $subject->update($updateData);

            return response()->json(
            [
                "success" => true,
                "message" => "Subject updated successfully",
                "data" => $subject
            ], 
            200
        );
        } catch (\Throwable $th) {
            return response()->json(
            [
                "success" => false,
                "message" => "Course cant be updated",
                "error" => $th->getMessage()
            ],
            500
            );
        }
    }
}
