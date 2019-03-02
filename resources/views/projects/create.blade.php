@extends('layouts.app')

@section('title', 'New Projects')

@section('content')

<form method="POST" action="../projects">

{{ csrf_field() }}

<div class="field">
  <label class="label" for="title">Titre</label>
  <div class="control">
    <input name="title" class="input {{$errors->has('description') ? 'is-danger': '' }}" type="text" placeholder="Titre">
  </div>
</div>

<div class="field">
  <label class="label" for="description">Description</label>
  <div class="control">
    <input name="description" class="input {{$errors->has('description') ? 'is-danger': '' }}" type="text" placeholder="Descritpion">
  </div>
</div>

<input class="button is-success" type="submit" value="Valider">

</form>

@if($errors->any())
<div class="notification is-danger">
    <ul>
        @foreach ($errors->all() as $error)

        <li>{{$error}}</li>

        @endforeach
    </ul>
</div>
@endif

@endsection