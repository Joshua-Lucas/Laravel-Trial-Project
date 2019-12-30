@extends('layouts.app')

@section('content')
<div class=" bg-gray-100 w-11/12 ">
    <div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>


                <div class="bg-green-400 text-center rounded-sm">
                    <h1 class="bg-yellow-500">Your Projects</h1>
                    @foreach($project as $project)
                        <a href="/projects/{{ $project->id }}">
                            {{$project->title}}
                        </a>
                    @endforeach
                </div>




            </div>
        </div>
    </div>
</div>
@endsection
