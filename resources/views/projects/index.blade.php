@extends('layouts.app')

@section('title', 'All projects')

@section('content')

<h1 class="title has-text-centered" id="project-list-title">Projects</h1>

<div class="project-list">
    @foreach( $projects as $project)

    <li>

    <a href="projects/{{ $project->id }}">
    {{ $project->title }}
    </a>
    
    </li>

    @endforeach

</div>

<a href="projects/create" class="button is-success" id="create-project">Créer un projet</a>

@endsection
