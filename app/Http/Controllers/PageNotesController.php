<?php

namespace App\Http\Controllers;

use App\Note;
use App\Project;


class PageNotesController extends Controller
{
    

    public function store(Project $project)
    {

       
        $attributes =request()->validate ([
            'projecrt_id' => $project->id,
            'editor' => ['required', 'min:3'],
            'notes' => ['required','max:255'],
        ]);


        Note:: create($attributes);

        return back();


    }







}
