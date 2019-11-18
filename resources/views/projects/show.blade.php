@extends('layout')



@section('content')
    <div>
        <a href='/projects/{{$project -> id}}/edit'>Edit Project</a>
    </div>
    <div>
        <h1>{{ $project->title }}</h1>
    
        <h2>Supervisor:{{ $project->supervisor }}</h2>
        
        <h3>{{ $project->comments}}</h3>

        <a href='/projects/{{$project -> id}}/edit'>Edit Project</a>

    </div>

    @if ($project->notes->count())
        <div>  
            @foreach($project->notes as $note)
                
                <li>{{$note->updated_at}} by {{$note->editor}} "{{$note->notes}}" </li>

            @endforeach
        </div>
    @endif

<!-- FORM TO ADD NEW NOTE-->

    <div>
        <form method="POST" action="/projects/{{ $project->id }}/notes">
            @csrf
        
            <div>
                <label for="editor">Editor</label>
                <input type="text" name="editor" Placeholder='' required >
            
            </div>

            <div>
        
                <label for="notes">Note</label>
                <textarea name="notes" required ></textarea>

            </div>
            <div>
                <button type='submit'>Add Note</button>
            </div>
        
        
        </form>
    </div>






@endsection