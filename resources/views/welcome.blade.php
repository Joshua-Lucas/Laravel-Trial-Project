@extends('layout')

@section('title', 'Welcome')

@section('content')

    <h1>Welcome</h1>

    <p>I have created this project to test and apply what I have been learning in the Laracast course on Laravel from Scratch.</p>

    <p>Please click the Visited link and enter your name so we have a record of your visit. Thank you!</p>

    <h2>Previous visitors</h2>

    @foreach($visitors as $visitor)

        <div>
            <li>{{$visitor->name}}</li>
        </div>

    @endforeach

@endsection