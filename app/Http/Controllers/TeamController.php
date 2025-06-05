<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function store(Request $request)
    {
        $team = new Team;
        $team->name = $request-> name;
        $team->description = $request-> description;
        $team->icon = $request->icon;
        $team->option = $request->option;
        $team->post = $request->post;
        $team->save();
        return redirect()->back();
    }

    function add(){
        return view('admin.team.add');
    }

    function list(){
        $team = Team::all();
        return view('admin.team.list',compact('team'));
    }

    function listt(){
        $team = Team::all();
        return view('pages.team',compact('team'));
    }

    function edit($id){
        $team = Team::find($id);
        return view('admin.team.edit', compact('team'));
    }

    function update(Request $request,$id){
        $team = Team::find($id);

        $team->name = $request-> name;
        $team->description = $request-> description;
        $team->icon = $request->icon;
        $team->option = $request->option;
        $team->post = $request->post;
        $team->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $team = Team::find($id);
        if ($team) {
            $team->delete();
        }
    return redirect()->back();
    }
}
