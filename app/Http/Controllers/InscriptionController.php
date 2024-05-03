<?php

namespace App\Http\Controllers;

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
}
