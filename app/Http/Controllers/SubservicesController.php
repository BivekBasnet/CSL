<?php

namespace App\Http\Controllers;

use App\Models\subservices;
use App\Models\services;
use Illuminate\Http\Request;
use App\Http\Controllers\ServicesController;

class SubservicesController extends Controller
{
    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'service_id' => 'required|exists:services,id',
        ]);

        $subservices = new Subservices;
        $subservices->name = $request-> name;
        $subservices->service_id = $request->service_id;
        $subservices->save();
        return redirect()->back();
    }

    function add(){
        $services = Services::all();
        return view('admin.subservices.add',compact('services'));
    }

    function list(){
        $subservices = Subservices::all();
        return view('admin.subservices.list',compact('subservices'));
    }

    function edit($id){
        $subservices = subservices::find($id);
        return view('admin.subservices.edit', compact('subservices'));
    }

    function update(Request $request,$id){
        $subservices = Subservices::find($id);

        $subservices->name = $request-> name;
        $subservices->id = $request-> id;
        $subservices->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $subservices = Subservices::find($id);
        if ($subservices) {
            $subservices->delete();
        }
    return redirect()->back();
    }
}
