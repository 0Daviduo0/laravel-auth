@extends('layouts.main-layout')

@section('content')
    
<main>

    <h1>Projects</h1>
    <div class="projects_wrapper">
    @foreach ($projects as $project)
        
            <div class="project">

                <div class="prj-title"> <a href="{{ route('project.show', $project) }}">{{ $project -> name }} </div>
                <img class="prj-image" src="{{ asset('storage/' . $project -> main_image) }}" alt=""> </a>

            </div>
    @endforeach
    </div>

</main>


@endsection