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
        <div class=" bg-forest flex flex-col mb-4 p-4 text-center text-linen rounded-lg shadow-xl md:mx-6 lg:w-5/6 lg:self-center xl:w-4/5 ">  
            @foreach($project->notes as $note)
                
                <li>{{$note->updated_at}} by {{$note->editor}} "{{$note->notes}}" </li>

            @endforeach
        </div>
    @endif

<!-- FORM TO ADD NEW NOTE-->

    <div class=" bg-forest flex flex-col text-center  text-linen rounded-lg shadow-xl md:mx-6 lg:w-5/6 lg:self-center xl:w-4/5">
        <form method="POST" action="/projects/{{ $project->id }}/notes">
            @csrf
        

            <div class="m-3 w-full lg:w-3/4 mx-auto">
        
               
                <textarea name="notes" class="w-10/12 h-24 bg-transparent text-center border-2 border-white rounded placeholder-white resize-none" required placeholder='Notes'></textarea>

            </div>
            <div class="m-3 w-full lg:w-3/4 mx-auto">
                <button type='submit' class="w-10/12 p-2 rounded bg-gray-200 text-gray-900 shadow-md">Add Note</button>
            </div>
        </form>

        @include ('errors')

    </div>
</div>





@endsection