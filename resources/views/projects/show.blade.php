@extends('layout')


@section('content')

<div>
    <h1>{{ $project->title }}</h1>
   
    <h2>Supervisor:{{ $project->supervisor }}</h2>
    
    <h3>{{ $project->comments}}</h3>
</div>
    <div>
    <a href='/projects/{{$project -> id}}/edit'>Update Project Log</a>
    </div>

@endsection