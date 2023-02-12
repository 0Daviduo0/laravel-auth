@extends('layouts.main-layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    SEI NELLA TUA HOME PRIVATA, Quì puoi gestire la tua pagina!
                </div>
            </div>
        </div>
    </div>
</div>
    
<main>

    <h1>Projects</h1>
    <div class="new-project_wrapper">
        <a class="new-project_button" href="{{ route('project.create') }}">CREA NUOVO PROGETTO</a>
    </div>
    <div class="projects_wrapper">
    @foreach ($projects as $project)
        
            <div class="project">

                <div class="prj-title"> <a href="{{ route('project.show', $project) }}">{{ $project -> name }} </div>
                <img class="prj-image" src="{{ asset('storage/' . $project -> main_image) }}" alt=""> </a> 
                <div class="admin-actions_wrapper">
                    <a class="prj-delete-button" href="{{ route('project.delete', $project) }}"> 🗑 </a> 
                    <a class="prj-edit-button" href="{{ route('project.edit', $project) }}"> ✏ </a>
                </div>
               
            </div>
    @endforeach
    </div>

</main>


@endsection