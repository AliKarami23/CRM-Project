<?php

namespace Modules\Factor\Http\Controllers;

use App\Models\Factor;
use Illuminate\Routing\Controller;
use Modules\Factor\Http\Requests\FactorRequest;

class FactorController extends Controller
{


    public function create(FactorRequest $request)
    {

        Factor::create($request->all());

        $Factor = $request->all();

        return response()->json([
            'json'=>'Factor is Add',
            'Factor'=>$Factor
        ]);
    }



    public function edit(FactorRequest $request, $id)
    {
        $factor = Factor::find($id);

        if (!$factor) {
            return response()->json(['error' => 'Factor not found'], 404);
        }

        $factor->update($request->all());

        return response()->json([
            'message' => 'Factor is Edit',
            'factor' => $factor
        ]);
    }

    public function destroy($id)
    {
        Factor::destroy($id);

        return response()->json([
            'json'=>'Factor is Deleted']);
    }


    public function index()
    {

        $Factor = Factor::all();
        return response()->json([
            'Factor' => $Factor
        ]);
    }
}
