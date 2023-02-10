@extends('layouts.main-layout')

@section('content')
    
    <h1>New task</h1>
    <form method="POST" action="{{ route('project.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="image">Image</label>
        <input type="text" name="image">
        <br>
        <label for="description">Description</label>
        <textarea type="text" name="description" cols="40" rows="10"></textarea>
        <br>
        <label for="release_date">Release date</label>
        <input type="date" name="release_date">
        <br>
        <label for="repo_link">Github repo link</label>
        <input type="text" name="repo_link">
        <br>
        <input type="submit" value="Crea nuovo progetto">
    </form>

@endsection