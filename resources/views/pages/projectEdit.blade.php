@extends('layouts.main-layout')

@section('content')
    
    <h1>New task</h1>
    <form method="POST" action="{{ route('project.update', $project) }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value={{ $project -> name }}>
        <br>
        <label for="image">Image</label>
        <input type="text" name="image" value={{ $project -> main_image }}>
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" value={{ $project -> description }}>
        <br>
        <label for="release_date">Release date</label>
        <input type="text" name="release_date" value={{ $project -> release_date }}>
        <br>
        <label for="repo_link">Github repo link</label>
        <input type="text" name="repo_link" value={{ $project -> repo_link }}>
        <br>
        <input type="submit" value="Aggiorna progetto">
    </form>

@endsection