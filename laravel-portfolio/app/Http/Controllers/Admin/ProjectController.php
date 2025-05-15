<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    // INDEX
    public function index()
    {
        $projects = Project::all();
        // dd($projects); 
        return view ('project.index', compact('projects'));
    }

    // CREATE
    public function create()
    {
        
        $types = type::all();
        // dd($types);
        $technologies = technology::all();
        return view('project.create', compact('types', 'technologies'));
    }

   // STORE
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->all();
        // dd($data);

        $newProject = new Project();

        $newProject->name = $data['name'];
        $newProject->repo = $data['repo'];
        $newProject->description = $data['description'];
        $newProject->type_id = $data['type_id'];

        $newProject->save();

        $newProject->technologies()->attach($data['technologies']);


        return redirect()->route('project.show', $newProject);
    }

    // SHOW
    public function show(Project $project)
    {
        // dd($project);
        return view ('project.show', compact('project'));
        // dd($project->type);
    }

    // EDIT
    public function edit(Project $project)
    {
        $types = type::all();
        return view('project.edit', compact('project', 'types'));
    }

    // UPDATE
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        // dd($data);

        $project->name = $data['name'];
        $project->repo = $data['repo'];
        $project->description = $data['description'];
        $project->type_id = $data['type_id'];

        $project->update();

        return redirect()->route('project.show', $project);
    }

    // DELETE
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index');
    }
}
