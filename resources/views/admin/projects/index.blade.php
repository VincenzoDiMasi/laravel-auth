@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-center text-danger my-5">
            MY PROJECTS
        </h1>

        <div class="row g-5">

            @foreach ($projects as $project)
            <div class="col-4 mb-5">
                <div class="card text-center">
                    <img src="{{$project->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$project->title}}</h5>
                      <p class="card-text">Created at: {{$project->created_at}}</p>
                      <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary">See more</a>
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>

        <div class="buttons my-5 d-flex justify-content-center">
            <a href="{{route('admin.projects.create')}}" class="btn btn-success">Create a New Project</a>
        </div>

        </div>
    </div>
@endsection