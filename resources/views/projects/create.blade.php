@extends('layout')

@section('title', 'Project Log')

@section('content')

<h1>Project Work Log</h1>

<form method="POST" action='/'>

    @csrf

    <div>
        <input type="text" name='title' placeholder='Project Title' value='{{ old("title") }}'>
    </div>

    <div>
        <input type="text" name='supervisor' placeholder='Supervisor Name' value='{{ old("supervisor") }}'>
    </div>

    <div>
    
        <textarea name="comments" placeholder='Project comments'>{{ old("comments") }}</textarea>
    
    </div>    

    <!-- <div>
        <label for="date_complete">Date Complete</label>
            <input type="date" name='date_complete' placeholder='Date Complete'>
        
    </div> -->

    <div>
    
        <button type="submit">Log Project</button>

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

@endsection