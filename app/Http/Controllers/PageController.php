<?php

namespace App\Http\Controllers;

use App\visitor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    Public function index() 
    {
        
        $visitors = \App\Visitor::all();

        return view('visitor/welcome', ['visitors' => $visitors]);

    }


    Public function create()
    {

        return view('/visitor/create');


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
