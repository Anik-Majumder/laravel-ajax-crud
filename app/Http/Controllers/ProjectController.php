<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.project');
    }

    /**
     * get all the data from the project datatables.
     */

    public function getProjectData()
    {
        $projects = Project::get();

        return DataTables::of($projects)
            ->addColumn('action', function ($projects) {
                return '<a href="" class="btn btn-sm btn-success edit-btn" data-id="' . $projects->id . '" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a> 
                <a href="" id="deleteProjectBtn" class="btn btn-sm btn-danger delete-btn" data-id="' . $projects->id . '">Delete</a>';
            })->addColumn('thumb_image', function ($projects) {
                return '<img src="' . $projects->thumb_image . '" border="0" width="40" height="40" class="img-rounded" align="center" />';
            })->rawColumns(['thumb_image', 'action'])
            ->make(true);
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
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "project_title" => "string",
            "btn_text" => "string",
            "btn_link" => "string"
        ]);

        $project = new Project();

        $project->project_title = $request->project_title;
        $project->btn_text = $request->btn_text;
        $project->btn_link = $request->btn_link;

        // single image upload

        if ($request->hasFile('thumb_image')) {
            $thumb_image = $request->file('thumb_image');
            $img = uniqid() . '.' . time() . '.' . $thumb_image->getClientOriginalExtension();
            $thumb_image->move(public_path('uploads/project/'), $img);
            $project->thumb_image = 'uploads/project/' . $img;
        }
        // single image upload end

        $check = $project->save();

        if ($check) {
            return response()->json(['message' => 'success', 'data' => $project], 200);
        }
        return response()->json(['message' => 'failed', 'data' => ''], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return response()->json(['messege' => 'success', 'data' => $project], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate(
            [
                'project_title' => 'string',
                'btn_text' => 'string',
                'btn_link' => 'string'
            ]
        );


        $project->project_title = $request->project_title;
        $project->btn_text = $request->btn_text;
        $project->btn_link = $request->btn_link;

        // single image upload

        if ($request->hasFile('thumb_image')) {
            $thumb_image = $request->file('thumb_image');
            $img = uniqid() . '.' . time() . '.' . $thumb_image->getClientOriginalExtension();
            $thumb_image->move(public_path('uploads/project/'), $img);
            $project->thumb_image = 'uploads/project/' . $img;
        }
        // single image upload end

        $check = $project->save();

        if ($check) {
            return response()->json(['message' => 'success', 'data' => $project], 200);
        }

        return response()->json(['message' => 'failed', 'data' => ''], 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return response()->json(['message' => 'success', 'data' => ''], 200);
    }
}
