<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        // dd($projects); 
        return view ('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $types = type::all();
        // dd($types);
        return view('project.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return redirect()->route('project.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // dd($project);
        return view ('project.show', compact('project'));
        // dd($project->type);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = type::all();
        return view('project.edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index');
    }
}
