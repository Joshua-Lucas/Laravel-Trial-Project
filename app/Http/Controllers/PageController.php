<?php

namespace App\Http\Controllers;

use App\visitor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    Public function index() 
    {
        
        $visitors = \App\Visitor::all();

        return view('projects.index', ['visitors' => $visitors]);

    }


    Public function create()
    {

        return view('/projects/create');


    }

    public function store()
    {


        $visitor = new \App\Visitor;


        $visitor->name = request('name');
        $visitor->comments = request('comments');

        $visitor->save();

        return redirect('/');


    }


    public function delete($id)
    {




    }




}
