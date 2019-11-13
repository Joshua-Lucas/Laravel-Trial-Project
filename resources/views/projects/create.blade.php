@extends('layout')

@section('title', 'Project Log')

@section('content')

<h1>Project Work Log</h1>

<form method="POST" action='/'>

    @csrf

    <div>
        <input type="text" name='title' placeholder='Project Title'>
    </div>

    <div>
        <input type="text" name='supervisor' placeholder='Supervisor Name'>
    </div>

    <div>
    
        <textarea name="comments" placeholder='Project comments'></textarea>
    
    </div>    

    <div>
        <input type="date" name='sdate_complete' placeholder='Date Complete'>
    </div>

    <div>
    
        <button type="submit">Log Project</button>

    </div>



</form>

@endsection