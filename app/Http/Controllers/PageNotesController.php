<?php

namespace App\Http\Controllers;

use App\project;
use App\Note;
use App\User;


class PageNotesController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function store(Project $project)
    {
       
       
        
        $attributes = request()->validate ([
            'notes' => ['required','max:255'],
        ]);

        $attributes['editor'] = auth()->user()->name;


        $project->addNote($attributes);

        return back();


    }







}
