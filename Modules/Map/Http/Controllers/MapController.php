<?php

namespace Modules\Map\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Map;
use Illuminate\Routing\Controller;

class MapController extends Controller
{

    public function index()
    {
        //
    }

    public function create(LocationRequest $request)
    {
        Map::create($request->validated());
        $data = json_encode(['points' => [[$request->origin_lat, $request->origin_lng], [$request->destination_lat, $request->destination_lng]]]);
        $url = "https://graphhopper.com/api/1/route?key=c55ff780-66d9-40e7-bec8-354a9e242f6b";
        $result = file_get_contents($url, false, stream_context_create([
            "http" => [
                "method" => "POST",
                "header" => "Content-type: application/json",
                "content" => $data
            ]]));
        return response()->json(json_encode($result,true));
    }

    public function edit($id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
