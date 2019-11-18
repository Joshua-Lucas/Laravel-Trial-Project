<?php

namespace App\Http\Controllers;

use App\Note;
use App\Project;


class PageNotesController extends Controller
{
    

    public function store(Project $project)
    {
       
        $attributes = request()->validate ([
            'editor' => ['required', 'min:3'],
            'notes' => ['required','max:255'],
        ]);

        $project->addNote($attributes);

        return back();


    }







}
