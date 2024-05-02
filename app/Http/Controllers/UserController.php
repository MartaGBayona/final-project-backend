<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function getAllUsers()
    {
        try {
            $users = User::all();

            return response()->json(
                [
                    'success' => true,
                    'message' => "Users retrieved successfully",
                    'data' => $users
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success' => false,
                    'message' => "Users cant be retrieved",
                    'error' => $th->getMessage()
                ],
                500
            );
        }
    }

    public function updateUser(Request $request, $id)
    {
        try {
            $user = User::find($id);
            $updateData = $request->only(['name', 'surname', 'secondSurname', 'email']);
            $user->update($updateData);
            
            return response()->json([
                "success" => true,
                "message" => "User updated successfully",
                "data" => $user
            ], 
            200
        );

        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success'=> false,
                    'message' => "User cant updated",
                    'error' =>$th->getMessage()
                ],
                500
            );
        }
    }

    public function deleteUser ($id) 
    {
        try {
            $user_deleted = User::destroy($id);
            return response()->json(
                [
                    'success' => true,
                    'message' => "User deleted successfully",
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success' => false,
                    'message' => "User cant be deleted",
                    'error' => $th->getMessage()
                ],
                500
            );
        }
    }
}

