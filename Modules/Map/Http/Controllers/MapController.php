<?php

namespace Modules\Map\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Map;
use \Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MapController extends Controller
{

    public function index()
    {
        $map = Map::all();
        return response()->json([
            'map' => $map
        ]);
    }

    public function create(LocationRequest $request)
    {
        Map::create($request->validated());
        $data = json_encode(['points' => [[$request->origin_lng,$request->origin_lat], [$request->destination_lng,$request->destination_lat]]]);
        $url = "https://graphhopper.com/api/1/route?key=c55ff780-66d9-40e7-bec8-354a9e242f6b";
        $result = file_get_contents($url, false, stream_context_create([
            "http" => [
                "method" => "POST",
                "header" => "Content-type: application/json",
                "content" => $data
            ]]));
        return response()->json(json_decode($result,true));
    }

    public function edit(Request $request,$id)
    {
        $map = Map::find($id);

        if (!$map) {
            return response()->json(['error' => 'map not found'], 404);
        }

        $map->update($request->all());

        return response()->json([
            'message' => 'map is Edit',
            'map' => $map
        ]);
    }


    public function destroy($id)
    {
        Map::destroy($id);

        return response()->json([
            'json'=>'map is Deleted']);
    }
}
