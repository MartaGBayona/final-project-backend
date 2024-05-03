<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Inscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InscriptionController extends Controller
{
    public function getAllInscriptions()
    {
        try {
            $inscriptions = Inscription::with('student', 'course')->get();

            return response()->json(
                [
                    "success" => true,
                    "message" => "All relations between students and courses retrieved successfully",
                    "data" => $inscriptions
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Relations not retrieved",
                    "error" => $th->getMessage()
                ],
                500
            );
        }
    }

    public  function getUserInscriptions($userId)
    {
        try {

            $authenticatedUser = Auth::user();

            if ($authenticatedUser->id != $userId && $authenticatedUser->role_id != 1) {
                return response()->json([
                    "success" => false,
                    "message" => "Unauthorized",
                    "error" => "You are not authorized to view these inscriptions"
                ], 403);
            }

            $user = User::findOrFail($userId);
            $inscriptions = $user->inscriptions()->with('course')->get();

            return response()->json(
                [
                    "success" => true,
                    "message" => "All my inscriptions retrieved successfully",
                    "data" => $inscriptions
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Inscriptions not retrieved",
                    "error" => $th->getMessage()
                ],
                500
            );
        }
    }

    public function postInscription (Request $request, $courseId) {
        try {
            $course = Course::find($courseId);
            if (!$course) {
                return response()->json([
                    'success' => false,
                    'message' => "Course not found",
                ], 404);
            }

            $authenticatedUser = Auth::user();
            if ($authenticatedUser->role_id == 1) {
            } else {
                if ($authenticatedUser->id != $request->input('student_id')) {
                    return response()->json([
                        'success' => false,
                        'message' => "You can only enroll yourself",
                    ], 403);
                }
            }

            $validatedData = $request->validate([
                'student_id' => 'required|exists:users,id',
            ]);

            $existingInscription = Inscription::where('student_id', $validatedData['student_id'])
            ->where('course_id', $courseId)
            ->exists();

        if ($existingInscription) {
            return response()->json([
                'success' => false,
                'message' => "User is already enrolled in this course",
            ], 400);
        }

            $inscription = new Inscription;
            $inscription->student_id = $request->input('student_id');
            $inscription->course_id = $courseId;
            $inscription->save();

            return response()->json(
                [
                    'success' => true,
                    'message' => "Inscription create successfully",
                    'data' => $inscription
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success'=> false,
                    'message' => "Inscription cant be created",
                    'error' => $th->getMessage()
                ],
                500
            );
        }
    }
}
