@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center mt-4 mx-2 lg:w-3/4 xl:w-4/5 lg:justify-start lg:shadow-xl lg:mx-0">
    <div class=" mb-4 flex  flex-col items-center ">
        <h1 class="text-5xl text-center text-forest uppercase">{{ Auth::user()->name }}'s  Dashboard</h1>

        <!-- <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div> -->
    </div>

    <div class=" bg-forest flex flex-col text-center  text-linen rounded-lg shadow-xl md:mx-6 lg:w-5/6 lg:self-center">
        <h1 class="  mt-3 mx-1 text-2xl font-extrabold uppercase ">Your Projects</h1>
        <div class=" flex flex-col mt-2 mb-3 sm:flex-row sm:justify-center" >
            @foreach($project as $project)
                <a href="/projects/{{ $project->id }}" class="m-2 p-4 bg-sky flex flex-col items-center text-center rounded-sm shadow-xl ">
                    
                    <h2 class=" m-2 p-1 bg-storm w-full text-lg text-center flex-grow rounded-lg shadow-xl lg:break-words " >
                        {{$project->title}}
                    </h2>

                    <p class=" text-leather text-base italic "> {{$project->comments}}</p>
                </a>
            @endforeach
        </div>
    </div>



</div>
@endsection
