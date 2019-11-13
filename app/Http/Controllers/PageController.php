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

        Project:: create(request(['title','supervisor','comments','date_complete']));

        return redirect('/');


    }

    public function edit(Project $project)
    {


        return view('projects/edit', compact('project'));


    }




    public function update(Project $project)
    {

        $project->update(request(['supervisor','comments',]));


        return view('/projects/show',compact('project'));



    }



    public function delete(Project $project)
    {




    }




}
