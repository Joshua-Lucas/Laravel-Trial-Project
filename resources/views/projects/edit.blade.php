@extends('layout')

@section('content')
<h1>Update {{$project->title}} Project</h1>

<form method="POST" action='/projects/{{ $project->id}}'>
    @method('PATCH')
    @csrf

    <div>
        <input type="text" name='supervisor' placeholder='Supervisor Name' value='{{$project->supervisor}}'>
    </div>

    <div>
    
        <textarea name="comments" placeholder='Project comments'>{{$project->comments}}</textarea>
    
    </div>    

    <div>
        <label for="date_complete">Date Complete</label>
            <input type="date" name='date_complete' placeholder='Date Complete'>
        
    </div>

    <div>
    
        <button type="submit">Update</button>

    </div>



</form>

@if ($errors->any())
        <div>
            <ul>
            
            @foreach($errors->all() as $error)

                <li>{{ $error }}</li> 

            @endforeach
           
           </ul>

        </div>
    @endif





@endsection
