@extends('layout')

@section('title', 'Visited')

@section('content')

<h1>Log Your Visit</h1>

<form method="POST" action='/'>

    {{ csrf_field() }}

    <div>
        <input type="text" name='name' placeholder='Visitor name'>
    </div>

    <div>
    
        <textarea name="comments" placeholder='visitor comments'></textarea>
    
    </div>    

    <div>
    
        <button type="submit">Submit Visit</button>

    </div>

</form>

@endsection