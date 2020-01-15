@extends('layouts/app')



@section('content')
<div class="flex flex-col justify-center mt-4 mx-2 lg:w-3/4 xl:w-4/5 lg:justify-start lg:shadow-xl lg:mx-0"> 
    <div class=" mb-4 flex  flex-col items-center" >
        <h1 class="text-5xl text-center text-forest uppercase">{{ $project->title }}</h1>
    
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
        
                <label for="notes">Note</label>
                <textarea name="notes" required ></textarea>

            </div>
            <div>
                <button type='submit'>Add Note</button>
            </div>
        </form>

        @include ('errors')

    </div>
</div>





@endsection