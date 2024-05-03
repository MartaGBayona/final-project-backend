<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function getAllInscriptions()
    {
        try {
            $inscriptions = Inscription::with('student', 'course')->get();

            return response()->json([
                "success" => true,
                "message" => "All relations between rooms and users retrieved successfully",
                "data" => $inscriptions
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Relations not retrieved",
                "error" => $th->getMessage()
            ], 500);
        }
    }
}
