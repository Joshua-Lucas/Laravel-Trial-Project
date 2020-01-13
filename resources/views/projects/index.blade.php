@extends('layouts/app')

@section('title', 'Welcome')

@section('content')
<div class="flex flex-col justify-center mt-4 mx-2 lg:w-3/4 xl:w-4/5 lg:justify-start lg:shadow-xl lg:mx-0">

    <div class=" mb-4 flex  flex-col items-center ">
        <h1 class="text-5xl text-center text-forest uppercase">Company Worklogs</h1>
    </div>

    <div class="text-center mt-2 mb-4">
        <p>This is the homepage where you will see all projects being worked on thorughout the company.</p>
    </div>
    
    <div class=" bg-forest flex flex-col flex-wrap text-center  text-linen rounded-lg shadow-xl md:mx-6 lg:w-5/6 lg:px-3 lg:self-center">
        <h2 class="mt-3 mx-1 text-2xl font-extrabold uppercase ">Projects</h2>
        <div class=" flex flex-col flex-wrap mt-2 mb-3 sm:flex-row sm:justify-center" >
        @foreach($project as $project)


                    <a href="/projects/{{ $project->id }}" class="m-2 p-4 bg-storm items-center text-center rounded-lg shadow-xl">
                        {{$project->title}}
                    </a>


        @endforeach
        </div>
    </div>
</div>
@endsection