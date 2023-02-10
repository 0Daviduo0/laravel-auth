@extends('layouts.main-layout')

@section('content')
    
<h1>Projects</h1>
<ul>
    @foreach ($projects as $project)
        <li>
            <a href="{{ route('project.show', $project) }}"> {{ $project -> name }} </a> 
        </li>
    @endforeach
</ul>

@endsection