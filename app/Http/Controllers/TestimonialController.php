<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    function store(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->start = $request-> start;
        $testimonial->description = $request-> description;
        $testimonial->name = $request->name;
        $testimonial->add = $request->add;
        $testimonial->service = $request->service;
        $testimonial->save();
        return redirect()->back();
    }

    function add(){
        return view('admin.testimonial.add');
    }

    function list(){
        $testimonial = testimonial::all();
        return view('admin.testimonial.list',compact('testimonial'));
    }

    function listt(){
        $testimonial = Testimonial::all();
        return view('pages.testimonials',compact('testimonial'));
    }

    function edit($id){
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    function update(Request $request,$id){
        $testimonial = Testimonial::find($id);

        $testimonial->start = $request-> start;
        $testimonial->description = $request-> description;
        $testimonial->name = $request->name;
        $testimonial->add = $request->add;
        $testimonial->service = $request->service;
        $testimonial->save();
        return redirect()->back();
        return redirect()->back();
    }
    public function delete($id)
    {
        $testimonial = Testimonial::find($id);
        if ($testimonial) {
            $testimonial->delete();
        }
    return redirect()->back();
    }
}
