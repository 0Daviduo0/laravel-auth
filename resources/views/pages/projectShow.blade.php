@extends('layouts.main-layout')

@section('content')
    
<h1>Project</h1>
<ul>
    <h1>project name: {{ $project -> name }}</h1> {{ $project -> release_date }} <br>
    <img src="{{ $project -> main_image }}" alt=""> <br>
    <p>
        {{ $project -> description }}
    </p>
</ul>

@endsection