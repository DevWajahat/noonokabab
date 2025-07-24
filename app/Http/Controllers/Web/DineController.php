<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDineRequest;
use App\Models\Branch;
use App\Models\Reservation;


class DineController extends Controller
{
    public function index()
    {

        $branches = Branch::all();

        return view('screens.web.dine-in.index',get_defined_vars());
    }
    public function store(StoreDineRequest $request)
    {

        Reservation::create([
            'user_id' => auth()->user()->id,
            'name' => $request?->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'branch_id' => $request->venue,
            'persons' => $request->person,
            'date' => $request->date
        ]);

        return back()->with('message','dine in request send successfully.');
    }
}
