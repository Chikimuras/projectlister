<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{
    public function index(){

        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create(){


        return view('projects.create');
    }

    public function store(){

       $dataValues = request()->validate([
            'title' => ['required', 'min:3', 'max:100'],
            'description'=>['required', 'min:10']
        ]);

        Project::create($dataValues);

        return redirect('/projects');
    }

    public function edit(Project $project){

        return view('projects.edit', compact('project'));

    }

    public function show(Project $project){

        return view('projects.show', compact('project'));

    }

    public function update(Project $project){

        $dataValues = request()->validate([
            'title' => ['required', 'min:3', 'max:100'],
            'description'=>['required', 'min:10']
        ]);

       $project->update($dataValues);

        return redirect('/projects');
        
    }

    public function destroy($id){
        
        $project = Project::findOrFail($id)->delete();

        return redirect('/projects');



    }
}
