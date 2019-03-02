@extends('layouts.app')

@section('title', 'Modifier un projet')

@section('content')

<h1 class="title">Edit Project</h1>

<form method="POST" action="../../projects/{{ $project->id}}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div class="field">
        <label class="label" for="title">Titre</label>
        <div class="control">
            <input name="title" class="input" type="text" placeholder="Titre" value="{{ $project->title }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <input name="description" class="input" type="text" placeholder="Descritpion" value="{{ $project->description }}">
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button class=" button is-warning" type="submit">Modifier</button>
        </div>
    </div>
</form>

<form method="POST" action="../../projects/{{ $project->id}}">
@method('DELETE')
@csrf

<div class="field">
        <div class="control">
            <button class=" button is-danger" type="submit">Supprimer</button>
        </div>
    </div>

</form>

@endsection
