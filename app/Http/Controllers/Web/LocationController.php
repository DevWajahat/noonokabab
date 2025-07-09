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
        $route = url('menu').'/'.$request->type.'/'.$branch->id;

        $location = [
            'branch' => [$branch],
            'type' => $request->type,
            'route' => $route
        ];


        session()->put('location',$location);

        return response()->json([
            'branch' => $location["branch"][0],
            'location' => $location
        ]);
    }
}
