@extends('layout')

@section('title', 'Welcome')

@section('content')

    <h1>Project Managment Homepage</h1>

    <p>I have created this project to test and apply what I have been learning in the Laracast course on Laravel from Scratch.</p>

    <p>Please click the Visited link and enter your name so we have a record of your visit. Thank you!</p>

    <h2>Previous visitors</h2>

    @foreach($project as $project)

        <div>
            <li>{{$project->title}}</li>
        </div>

    @endforeach

@endsection