<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\API;

class ApiController extends Controller
{
    public function index()
    {
        return API::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $item = API::create($request->all());

        return response()->json($item, 201);
    }

    public function show($id)
    {
        $item = API::find($id);

        if ($item) {
            return response()->json($API, 200);
        } else {
            return response()->json(['error' => 'Item not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $item = API::find($id);

        if ($item) {
            $item->update($request->all());
            return response()->json($item, 200);
        } else {
            return response()->json(['error' => 'Item not found'], 404);
        }
    }

    public function destroy($id)
    {
        $item = API::find($id);

        if ($item) {
            $item->delete();
            return response()->json(null, 204);
        } else {
            return response()->json(['error' => 'Item not found'], 404);
        }
    }
}
