<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sideline;
use Illuminate\Http\Request;

class SidelineController extends Controller
{
    public function index()
    {

        $sidelines = Sideline::all();


        return view('screens.admin.sideline.index', get_defined_vars());
    }
    public function create()
    {
        return view('screens.admin.sideline.create');
    }
    public function store(Request $request)
    {

        $optional = $request->check == 'Optional' ? $request->check : 'Compulsory';

        $sideline =  Sideline::create([
            'name' => $request->sideline,
            'option' => $optional
        ]);

        foreach ($request->options as $option) {
            $sideline->options()->create([
                'name' => $option
            ]);
        }
        return redirect()->route('admin.sideline.index')->with('message', 'Sideline added Successfully.');
    }
    public function edit($id)
    {
        $sideline = Sideline::find($id);

        return view('screens.admin.sideline.edit', get_defined_vars());
    }
    public function update(Request $request, $id)
    {

        $sideline = Sideline::find($id);

        $optional = $request->check == 'Optional' ? $request->check : 'Compulsory';

        $sideline->update([
            'name' => $request->sideline,
            'option' => $optional,
        ]);

        $sideline->options()->delete();


        foreach ($request->options as $option) {
            $sideline->options()->create([
                'name' => $option
            ]);
        }

        return redirect()->route('admin.sideline.index')->with('message', 'Sideline Updated Successfully.');
    }
}
