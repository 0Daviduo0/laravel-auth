@extends('layouts.main-layout')

@section('content')
    
<main>
    <div class="main_title">
        <h1>Modifica progetto</h1>
    </div>
        <form method="POST" action="{{ route('project.update', $project) }}" enctype="multipart/form-data">
            @csrf

            <div class="input_group">

                <div class=" input_field">
                    <label for="name"><i class="fa-solid fa-file-pen"></i> | Name</label><br>
                    <input class="name_field field" type="text" name="name" value={{ $project -> name }}>
                </div>

                <div class=" input_field">
                    <label for="main_image"><i class="fa-solid fa-image"></i> | Image</label><br>
                    <input class="image_field field" type="file" name="main_image">
                </div>

            </div>

            <div class=" input_field">
                <label for="description"><i class="fa-solid fa-quote-left"></i> | Description</label><br>
                <textarea class="field" type="text" name="description" cols="120" rows="10" value={{ $project -> description }}></textarea>
            </div>

            <div class="input_group">

                <div class=" input_field">
                    <label for="release_date"><i class="fa-solid fa-calendar-days"></i> | Release date</label><br>
                    <input class="date_field field" type="date" name="release_date" value={{ $project -> release_date }}>
                </div>

                <div class=" input_field">
                    <label for="repo_link"><i class="fa-solid fa-link"></i> | Github repo link</label><br>
                    <input class="link_field field" type="text" name="repo_link" value={{ $project -> repo_link }}>
                </div>

            </div>

            <input class="card_principal_button" type="submit" value="Aggiorna progetto">
        </form>

</main>

@endsection