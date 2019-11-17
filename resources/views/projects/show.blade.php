@extends('layout')



@section('content')
    <div>
        <a href='/projects/{{$project -> id}}/edit'>Edit Project</a>
    </div>
    <div>
        <h1>{{ $project->title }}</h1>
    
        <h2>Supervisor:{{ $project->supervisor }}</h2>
        
        <h3>{{ $project->comments}}</h3>
    </div>



    @foreach($project->notes as $note)

        <div>
        
            <li>{{$note->updated_at}} by {{$note->editor}} "{{$note->notes}}" </li>
        
        </div>

    @endforeach

    <div>
        <form method="POST" action="">
            @csrf
        
            <div>
                <label for="editor">Editor</label>
                <input type="text" name="editor" Placeholder='' required >
            
            </div>

            <div>
        
                <label for="notes">Note</label>
                <textarea name="notes" ></textarea>

            </div>
            <div>
                <button type='submit'>Add Note</button>
            </div>
        
        
        </form>
    </div>






@endsection