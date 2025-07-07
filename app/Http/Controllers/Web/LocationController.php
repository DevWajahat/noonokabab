<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $location = [];

        $branch = Branch::find($request->location);
        $location = [
            'branch' => [$branch],
            'type' => [$request->type],
            'route' => $request->route
        ];


        session(['location' =>  $location]);

        return response()->json([
            'branch' => $location["branch"][0]
        ]);
    }
}
