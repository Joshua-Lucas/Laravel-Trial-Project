<?php

namespace App\Http\Controllers;

use App\project;


class PageController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }
 


    Public function index() 
    {
       
        $project = Project::where('owner_id', auth()->id()->get());

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
            'comments' => ['required','max:255'],
        ]);

        $attributes ['supervisor'] = auth()->user()->name;    
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
