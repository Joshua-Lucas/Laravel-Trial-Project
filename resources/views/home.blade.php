@extends('layouts.app')

@section('content')
<div class="  flex flex-col justify-center mt-4 mx-2 ">
    <div class=" mb-4 flex  flex-col items-center">
        <h1 class="text-5xl text-center text-yellow-500">{{ Auth::user()->name }}'s  Dashboard</h1>

        <!-- <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div> -->
    </div>

    <div class=" text-center rounded-sm flex flex-col md:mx-6 lg:w-1/2">
        <h1 class="bg-yellow-500  mx-1 text-2xl font-extrabold ">Your Projects</h1>
        <div class=" flex flex-col mt-2 sm:flex-row sm:justify-center" >
            @foreach($project as $project)
                <a href="/projects/{{ $project->id }}" class="m-2 p-4  bg-yellow-500 flex flex-col items-center text-center rounded-sm shadow-xl ">
                    
                    <h2 class=" m-2 p-1 bg-gray-800 w-full text-gray-100 text-lg text-center flex-grow rounded-sm shadow-xl lg:break-words " >
                        {{$project->title}}
                    </h2>

                    <p class="text-base italic "> {{$project->comments}}</p>
                </a>
            @endforeach
        </div>
    </div>



</div>
@endsection
