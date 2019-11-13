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


        $project= new \App\project;


        $project->title = request('title');
        $project->supervisor = request('supervisor');
        $project->comments = request('comments');
        $project->date_complete = request('date_complete');

        $project->save();

        return redirect('/');


    }

    public function edit(Project $project)
    {


        return view('projects/edit', compact('project'));


    }




    public function update(Project $project)
    {

        // $project->update(request(['supervisor','comments',]));

        $project->supervisor= request('supervisor');
        $project->comments = request('comments');

        $project->save(); 


        return redirect('/');



    }



    public function delete($id)
    {




    }




}
