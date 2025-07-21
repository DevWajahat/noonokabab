<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLunchTimeRequest;
use App\Models\LunchTime;
use Illuminate\Http\Request;

class LunchTimeController extends Controller
{
     public function index()
    {
        $lunchTimes = LunchTime::all();


        return view('screens.admin.lunch-time.index',get_defined_vars());
    }
      public function create()
    {


        return view('screens.admin.lunch-time.create');
    }
    public function store(StoreLunchTimeRequest $request)
    {

        // dd($request->all());

        LunchTime::create([
            'from' => $request->from,
            'to' => $request->to
        ]);


        return redirect()->route('admin.lunchtime.index')->with('message','Lunch Time Added Successfully.');
    }
    public function edit($id)
    {

        $lunchTime = LunchTime::find($id);



        return view('screens.admin.lunch-time.edit',get_defined_vars());
    }
    public function update(StoreLunchTimeRequest $request, $id)
    {

      

        $lunchTime = LunchTime::find($id);

        $lunchTime->update([
            'from' => $request->from,
            'to' => $request->to
        ]);


        return redirect()->route('admin.lunchtime.index')->with('message','Lunch Time Updated Successfully.');
    }



    // public function destroy()
    // {
    //    return back()->with('message','Lunch Time Deleted Successfully.');
    // }
}
