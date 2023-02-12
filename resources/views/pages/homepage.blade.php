@extends('layouts.main-layout')

@section('content')
    
<h1>Projects</h1>

<ul>
    @foreach ($projects as $project)
        <li>
            <h2>
                <a href="{{ route('project.show', $project) }}"> {{ $project -> name }} </a> 
            </h2>
            <img class="prj-image" src="{{ asset('storage/' . $project -> main_image) }}" alt="">
        </li>
    @endforeach
</ul>

@endsection