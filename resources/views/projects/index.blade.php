@extends('layout')

@section('title', 'Welcome')

@section('content')

    <h1>Project Managment Homepage</h1>

    <p>This is the home page where you will see all projects being worked on. <br> If you need to add a new project click the new project log. If you want to review an existing project click the project.</p>
  
    <h2>Projects</h2>

    @foreach($project as $project)

        <div>
            <li>
                <a href="/projects/{{ $project->id }}">
                    {{$project->title}}
                </a>
            </li>
        </div>

    @endforeach

@endsection