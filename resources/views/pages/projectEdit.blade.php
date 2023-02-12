@extends('layouts.main-layout')

@section('content')
    
    <h1>New task</h1>
    <form method="POST" action="{{ route('project.update', $project) }}" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value={{ $project -> name }}>
        <br>
        <label for="main_image">Image</label>
        <input type="file" name="main_image"> <br>
        Immagine Precedente: <br>
        <img class="prj-image" src="{{ asset('storage/' . $project -> main_image) }}" alt=""> <br>
        <br>
        <label for="description">Description</label>
        <textarea type="text" name="description" cols="40" rows="10" value={{ $project -> description }}></textarea>
        <br>
        <label for="release_date">Release date</label>
        <input type="date" name="release_date" value={{ $project -> release_date }}>
        <br>
        <label for="repo_link">Github repo link</label>
        <input type="text" name="repo_link" value={{ $project -> repo_link }}>
        <br>
        <input type="submit" value="Aggiorna progetto">
    </form>

@endsection