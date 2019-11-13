<?php

namespace App\Http\Controllers;

use App\visitor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    Public function index() 
    {
        
        $project = \App\project::all();

        return view('projects.index', ['project' => $project]);

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


    public function delete($id)
    {




    }




}
