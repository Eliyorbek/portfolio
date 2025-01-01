<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectsRequest;
use App\Models\Project;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectsRequest $request)
    {
        $imgName = md5(uniqid(rand(), true)) . '.' . $request->file('image')->extension();
        $path = $request->file('image')->storeAs('public/project_img', $imgName);
        Project::create([
            'name'=>$request->name,
            'image'=>$imgName,
            'link'=>$request->link,
            'category_id'=>$request->category_id
        ]);
        return redirect()->route('projects.index')->with('success','Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectsRequest $request, string $id)
    {
        $project = Project::find($id);
        if($request->hasFile('image')){
            $imgName = md5(uniqid(rand(), true)). '.'. $request->file('image')->extension();
            $request->file('image')->storeAs('public/project_img', $imgName);
            if (file_exists(public_path('storage/project_img/' . $project->image))) {
                unlink(public_path('storage/project_img/' . $project->image));
            }
        }else{
            $imgName = $project->image;
        }
        $project->update([
            'name'=>$request->name,
            'image'=>$imgName,
            'link'=>$request->link,
            'category_id'=>$request->category_id
        ]);
        return redirect()->route('projects.index')->with('update','Project updated successfully');
    }

/** 
 * Remove the specified resource from storage.      
     */
    public function destroy(string $id)
    {
        //
    }
}
