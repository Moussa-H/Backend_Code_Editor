<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeController extends Controller
{
    public function getAllcodes()
    {
        $codes = Code::all();
        return response()->json([
            "codes" => $codes
        ], 200);
    }

      public function getcode($id)
    {
        $code = Code::find($id);
        return response()->json([
            "code" => $code
        ], 200);
    }

    public function createcode(Request $req){

        $validatedData = $req->validate([
            'user_id' => 'required|exists:users,id|numeric',
            'title' => 'required|string|max:255',
            'code' => 'required|string',
        ]);

        $code = Code::create($validatedData);
         return response()->json([
            "code" => $code
        ], 201);

    }

   public function updatecode(Request $req, $id)
    {
        $code = Code::find($id);

        if ($code) {
            $validated_data = $req->validate([
            'user_id' => 'required|exists:users,id|numeric',
            'title' => 'required|string|max:255',
            'code' => 'required|string',
            ]);
            $code->update($validated_data);
        }
        return response()->json([
            "message" => "updated successfully"
        ], 204);
    }

  public function deletecode($id)
    {
        $code = Code::find($id);
        $code->delete();
        return response()->json([
            "message" => "deleted successfully"
        ], 204);
    }



    }