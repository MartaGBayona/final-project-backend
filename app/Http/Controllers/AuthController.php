<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->name =$request->input('name');
            $user->surname =$request->input('surname');
            $user->secondSurname =$request->input('secondSurname');
            $user->birth =$request->input('birth');
            $user->email = $request->input('email');
            Log::info(0);
            $user->password = bcrypt($request->input('password'));

            $validator = Validator::make($request->all(), [
                "name" => "required|String",
                "surname" => "required|String",
                "secondSurname" => "String",
                "birth" => "required|Date",
                "email" => "required|unique:users",
                "password" => "required|min:4|max:15"
            ]);
            Log::info(1);
            if ($validator->fails()) {
                return response()->json(
                [
                    "success" => false,
                    "message" => "Validation failed",
                    "error" => $validator->errors()
                ]);
            };

            Log::info(2);
            $user->save();
            Log::info(3);

            return response()->json(
                [
                    'success' => true,
                    'message' => "User registed succesfully",
                    'data' => $user
                ],
                201
            );

        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response() ->json(
                [
                    'success' => false,
                    'message' => "User cant be created",
                ],
                500
            );
        }
    }
};