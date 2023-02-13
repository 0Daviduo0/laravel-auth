@extends('layouts.main-layout')

@section('content')

<div class="container welcome_admin_banner">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header admin_banner_title text-light">
                    <i class="fa-solid fa-user profile_icon_banner"></i> Benvenuto {{ Auth::user()->name }}
                </div>

                <div class="card-body admin_banner_body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    In questo momento ti trovi nella tua dashboard! Quì potrai:
                    <ul>
                        <i class="fa-regular fa-square-plus"></i> Aggiungere altri progetti <br> 
                        <i class="fa-solid fa-trash-can"></i> Rimuovere progetti <br>
                        <i class="fa-solid fa-square-pen"></i> Modificare progetti <br>
                        <i class="fa-solid fa-file-powerpoint"></i> Visualizzare progetti
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    
<main>

    <div class="main_title">
        <h1>PROJECTS</h1>
    </div>
    
    <div class="new-project_wrapper">
        <a class="new-project_button" href="{{ route('project.create') }}"> <i class="fa-regular fa-square-plus"></i></a>
    </div>
    <div class="projects_wrapper">
    @foreach ($projects as $project)
        
            <div class="project">

                <div class="prj-title"> <a href="{{ route('project.show', $project) }}">{{ $project -> name }} </div>
                <img class="prj-image" src="{{ asset('storage/' . $project -> main_image) }}" alt=""> </a> 
                <div class="admin-actions_wrapper">
                    <a class="prj-delete-button" href="{{ route('project.delete', $project) }}"> <i class="fa-solid fa-trash-can"></i> </a> 
                    <a class="prj-edit-button" href="{{ route('project.edit', $project) }}"> <i class="fa-solid fa-square-pen"></i> </a>
                </div>
               
            </div>
    @endforeach
    </div>

</main>


@endsection