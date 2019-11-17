<?php

namespace App\Http\Controllers;

use App\project;


class PageController extends Controller
{
    
    Public function index() 
    {
        
        $project = \App\project::all();

        return view('projects.index', ['project' => $project]);

    }


    Public function show(Project $project)
    {

        return view('/projects/show', compact('project'));

    }


    Public function create()
    {

        return view('/projects/create');

    }

    public function store()
    {


        $attributes =request()->validate ([
            'title' => ['required', 'min:3'],
            'supervisor' => ['required', 'min:3', ],
            'comments' => ['required','max:255'],
        ]);


        Project:: create($attributes);

        return redirect('/');


    }

    public function edit(Project $project)
    {


        return view('projects/edit', compact('project'));


    }




    public function update(Project $project)
    {


        $attributes =request()->validate ([
            'supervisor' => ['required', 'min:3', ],
            'comments' => ['required','max:255'],
        ]);


        $project->update($attributes);


        return view('/projects/show',compact('project'));



    }



    public function delete(Project $project)
    {




    }




}
