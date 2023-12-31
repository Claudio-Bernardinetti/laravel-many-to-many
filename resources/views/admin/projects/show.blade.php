@extends('layouts.app')


@section('content')

<div class="container bg-body-tertiary p-3">
  <div class="row m-5">
    <div class="col-md-6">
        <img class="img-fluid" width="400" src="{{ strstr($project->cover_image, 'http') ? $project->cover_image : asset('storage/' . $project->cover_image) }}" alt="Card image cap">
        {{-- <img src="{{ asset('storage/app/public/storage_img' . $project->cover_image) }}" alt="{{$project->cover_image}}"> --}}
    </div>
    <div class="col-md-6">
        <h1 >Show selected Project</h1>
          <h5>ID: {{$project->id}}</h5>
          <h6 class="text-muted"><strong>Title: </strong>{{$project->title}}</h6>
          <p><strong>Description: </strong>{{$project->description}}</p>
          <a href="{{$project->github_link}}" target="_blank">{{$project->github_link}}</a> <br>
          <a href="{{$project->internet_link}}" target="_blank">{{$project->internet_link}}</a>
          <p class="my-3"><strong>Project type: </strong>{{$project->type ? $project->type->name : 'No Type'}}</p>
          
          <p  class="my-3"><strong>Technology Used: </strong></p>
          @forelse ($project->technologies as $technology)

            <ul >
              <li>{{$technology->name}}</li>
            </ul>
          
          @empty
          <li>
              Technology no selected
          </li>
          @endforelse
          
          <a class="btn btn-primary mt-4" href="{{route('admin.projects.index', $project->id)}}" role="button">Go Back</a>
      </div>
    </div>
</div>

@endsection