@extends('layouts.app')

@section('title', 'Projet')

@section('content')
<div class="container has-text-centered">
    <div class="fluid">
        <h1 class="title">{{ $project->title }}</h1>
        <a class="button is-info" href="{{ $project->id }}/edit">Modifier</a>
    </div>

    <p>{{ $project->description }}</p>
</div>




@if($project->tasks->count())
<div class="fluid">
    <div class="block">
        <h1 class="title">Tâches</h1>
    </div>

    @foreach($project->tasks as $task)
    <div>
        <form action="../tasks/{{$task->id}}" method="post">
            @method('PATCH')
            @csrf

            <label for="completed" class="checkbox {{ $task->completed ? 'is-completed' : ''  }}">

                <input type="checkbox" name="completed" onChange="this.form.submit()"
                    {{ $task->completed ? 'checked' : ''  }}>
                {{$task->description}}

            </label>
        </form>
    </div>

    @endforeach

</div>

@endif

<form action="/projects/{{$project->id}}/tasks" method="post">
@csrf

    <div class="field has-addons">
        <p class="control">
            <input class="input" name="description" type="text" placeholder="Ajouter une tâche">
        </p>
        <p class="control">
            <input type="submit" class="button is-info" value="Ajouter">
        </p>
    </div>

    @include('error')

</form>

@endsection
