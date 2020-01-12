@extends('layouts/app')

@section('title', 'Project Log')

@section('content')
<div class="flex flex-col justify-center mt-4 mx-2 lg:w-3/4 xl:w-4/5 lg:justify-start lg:shadow-xl lg:mx-0">
    <div class=" mb-4 flex  flex-col items-center ">
        <h1 class="text-5xl text-center text-forest uppercase">New Project</h1>
    </div>
    <div class=" bg-forest flex flex-col text-center  text-linen rounded-lg shadow-xl md:mx-6 lg:w-5/6 lg:self-center xl:w-4/5">

        <form method="POST" action='/'>

            @csrf

            <div class="m-3 w-full lg:w-3/4 mx-auto">
                <input type="text" name='title' class='w-10/12 text-center bg-transparent border-b-2 border-white rounded-sm placeholder-white lg:w-3/4' placeholder='Project Title' value='{{ old("title") }}'>
            </div>

            <div class="m-3  w-full lg:w-3/4 mx-auto">
            
                <textarea name="comments" class="w-10/12 h-24 bg-transparent text-center border-2 border-white rounded placeholder-white resize-none" placeholder='Project Desctiption'>{{ old("comments") }}</textarea>
            
            </div>    

            <!-- <div>
                <label for="date_complete">Date Complete</label>
                    <input type="date" name='date_complete' placeholder='Date Complete'>
                
            </div> -->

            <div class="m-3 w-full lg:w-3/4 mx-auto">
            
                <button type="submit" class="w-10/12 p-2 rounded bg-gray-200 text-gray-900 shadow-md">Create Project</button>

            </div>

            
            @if ($errors->any())
                <div>
                    <ul>
                    
                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li> 

                    @endforeach
                
                </ul>

                </div>
            @endif




        </form>
    </div>
</div>
@endsection