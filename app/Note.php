<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $guarded = [];

    public function projects()
    {

        return $this->belongTo(Project::class);

    }
}
