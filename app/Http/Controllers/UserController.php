<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserProfile()
    {
        try {
            $user = auth()->user();

            return response()->json([
                'success' => true,
                'message' => 'Profile retrieved successfully',
                'data' => $user
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success' => false,
                    'message' => "profile cant be retrieved",
                    'error' => $th->getMessage()
                ],
                500
            );
        }
    }
}
