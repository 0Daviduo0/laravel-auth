@extends('layouts.main-layout')

@section('content')
<div class="img_prj_show_wrapper">
    <img class="prj-image" src="{{ asset('storage/' . $project -> main_image) }}" alt="">
</div>
<main>
    
    <div class="main_prj_informations">

        <div class="main_table_column main_title">
            <h1>PROGETTO</h1>
        </div>
        <div class="main_prj_title_date_link">
            <h2>Nome del progetto: {{ $project -> name }}</h2> 
            <h4>Data di rilascio: {{ $project -> release_date }} | Link di Github: <a class="github_link_icon" href="{{ $project -> repo_link }}"><i class="fa-brands fa-github"></i></a></h3>
            
        </div>

    </div>
    <div class="main_prj_informations">
        <div class=" main_table_column prj_title_description">
            <h1>DESCRIZIONE</h1>
        </div>
        <div class="prj_description_text">
            <h5>{{ $project -> description }}</h3>
        </div>
    </div>
        

        

</main>

@endsection