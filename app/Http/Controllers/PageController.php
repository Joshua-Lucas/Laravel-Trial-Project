<?php

namespace App\Http\Controllers;

use App\project;


class PageController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        $project = Project::all();

        return view('projects.index', ['project' => $project]);
    }


    public function show(Project $project)
    {

        return view('/projects/show', compact('project'));
    }


    public function create()
    {


        return view('/projects/create');
    }

    public function store()
    {


        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'comments' => ['required', 'max:255'],
        ]);

        $attributes['supervisor'] = auth()->user()->name;
        $attributes['owner_id'] = auth()->id();



        Project::create($attributes);

        return redirect('/projects');
    }

    public function edit(Project $project)
    {


        return view('projects/edit', compact('project'));
    }




    public function update(Project $project)
    {


        $attributes = request()->validate([
            'supervisor' => ['required', 'min:3',],
            'comments' => ['required', 'max:255'],
        ]);


        $project->update($attributes);


        return view('/projects/show', compact('project'));
    }



    public function destroy(Project $project)
    {

        if ($project->owner_id != auth()->id()) {
            return response(["You are not authorized to delete this project"], 403);
        }

        $project->delete();

        return redirect("/projects");
    }
}
