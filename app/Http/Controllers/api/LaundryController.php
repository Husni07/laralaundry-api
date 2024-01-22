<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    function readAll()
    {
        $laundryes = Laundry::with('user', 'shop')->get();

        return response()->json([
            'data' => $laundryes,
        ], 200);
    }

    function whereUserId($id)
    {
        $laundryes = Laundry::where('user_id', '=', $id)->with('user', 'shop')->orderBy('created_at', 'desc')->get();

        if (count($laundryes) > 0) {
            return response()->json([
                'data' => $laundryes,
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found',
                'data' => $laundryes,
            ], 404);
        }
    }

    function claim(Request $request)
    {
        $laundry = Laundry::where([
            ['id', '=', $request->id],
            ['claim_code', '=', $request->claim_code],
        ])->first();

        if (!$laundry) {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }

        if ($laundry->user_id != 0) {
            return response()->json([
                'message' => 'has been claimed',
            ], 400);
        }

        $laundry->user_id = $request->user_id;
        $updated = $laundry->save();

        if ($updated) {
            return response()->json([
                'data' => $updated,
            ], 201);
        } else {
            return response()->json([
                'message' => 'the server is no longer running.',
            ], 500);
        }
    }
}
