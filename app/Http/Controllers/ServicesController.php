<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;



class ServicesController extends Controller
{
    public function index()
    {
        $services = services::with('subservices')->get();
        return view('pages.services', compact('services'));
    }

    function store(Request $request)
    {
        $services = new Services;
        $services->name = $request-> name;
        $services->description = $request-> description;
        $services->save();
        return redirect()->back();
    }

    function add(){
        return view('admin.services.add');
    }

    function list(){
        $services = Services::all();
        return view('admin.services.list',compact('services'));
    }

    function edit($id){
        $services = Services::find($id);
        return view('admin.services.edit', compact('services'));
    }

    function update(Request $request,$id){
        $services = Services::find($id);

        $services->name = $request-> name;
        $services->description = $request-> description;
        $services->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $services = Services::find($id);
        if ($services) {
            $services->delete();
        }
    return redirect()->back();
    }
}
