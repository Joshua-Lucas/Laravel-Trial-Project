<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    Public function home() 
    {
        
        $visitors = \App\Visitor::all();

        return view('welcome', ['visitors' => $visitors]);

    }


    Public function visitor()
    {

        return view('visitor');


    }

    public function store()
    {


        $visitor = new \App\Visitor;


        $visitor->name = request('name');
        $visitor->comments = request('comments');

        $visitor->save();

        return redirect('/');


    }


}
