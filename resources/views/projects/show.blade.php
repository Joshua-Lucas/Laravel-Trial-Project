@extends('layout')


@section('content')

<h1>{{ $project->title }}</h1>
    <div>
        <h3>Supervisor:{{ $project->supervisor }}</h3>
    </div>

        
    <div>{{$project->created_at}},  {{ $project->comments}}</div>

    <div>
    <a href='/projects/{{$project -> id}}/edit'>Update Project Log</a>
    </div>

@endsection