@extends('layout')

@section('title', 'Welcome')

@section('content')

    <h1>Project Managment Homepage</h1>

  
    <h2>Projects</h2>

    @foreach($project as $project)

        <div>
            <li>{{$project->title}}</li>
        </div>

    @endforeach

@endsection