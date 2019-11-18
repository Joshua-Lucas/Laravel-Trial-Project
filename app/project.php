<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $guarded = [];


    public function notes()
    {

        return $this->hasMany(Note::class);

    }

    public function addNote($note)
    {

       $this->notes()->create($note);

    }



}
