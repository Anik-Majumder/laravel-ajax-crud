<?php

namespace App\Http\Controllers;


use App\Models\Header;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HeaderController extends Controller
{

    public function index()
    {
        return view('pages.header');
    }

    public function getHeaderData()
    {
        $headers = Header::get();

        return DataTables::of($headers)
            ->addColumn('action', function ($header) {
                return '<a href="" class="btn btn-sm btn-success edit-btn" data-id="' . $header->id . '" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a> 
                <a href="" id="deleteHeaderBtn" class="btn btn-sm btn-danger delete-btn" data-id="' . $header->id . '">Delete</a>';
            })->addColumn('profile_img', function ($header) {
                return '<img src="' . $header->profile_img . '" border="0" width="40" height="40" class="img-rounded" align="center" />';
            })->rawColumns(['profile_img', 'action'])
            ->make(true);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'title_1' => 'string',
                'title_2' => 'string',
                'desc' => 'string',
                'btn_text' => 'string',
                'btn_link' => 'string'
            ]
        );

        $header = new Header();

        $header->title_1 = $request->title_1;
        $header->title_2 = $request->title_2;
        $header->desc = $request->desc;
        $header->btn_text = $request->btn_text;
        $header->btn_link = $request->btn_link;

        // single image upload

        if ($request->hasFile('profile_img')) {
            $profile_img = $request->file('profile_img');
            $img = uniqid() . '.' . time() . '.' . $profile_img->getClientOriginalExtension();
            $profile_img->move(public_path('uploads/header/'), $img);
            $header->profile_img = 'uploads/header/' . $img;
        }
        // single image upload end

        $check = $header->save();

        if ($check) {
            return response()->json(['message' => 'success', 'data' => $header], 200);
        }

        return response()->json(['message' => 'failed', 'data' => ''], 400);
    }


    public function show(Header $header)
    {
        //
    }


    public function edit(Header $header)
    {
        return response()->json(['message' => 'success', 'data' => $header], 200);
    }


    public function update(Request $request, Header $header)
    {
        $request->validate(
            [
                'title_1' => 'string',
                'title_2' => 'string',
                'desc' => 'string',
                'btn_text' => 'string',
                'btn_link' => 'string'
            ]
        );

        $header->title_1 = $request->title_1;
        $header->title_2 = $request->title_2;
        $header->desc = $request->desc;
        $header->btn_text = $request->btn_text;
        $header->btn_link = $request->btn_link;

        // single image upload

        if ($request->hasFile('profile_img')) {
            $profile_img = $request->file('profile_img');
            $img = uniqid() . '.' . time() . '.' . $profile_img->getClientOriginalExtension();
            $profile_img->move(public_path('uploads/header/'), $img);
            $header->profile_img = 'uploads/header/' . $img;
        }
        // single image upload end

        $check = $header->save();

        if ($check) {
            return response()->json(['message' => 'success', 'data' => $header], 200);
        }

        return response()->json(['message' => 'failed', 'data' => ''], 400);
    }


    public function destroy(Header $header)
    {
        $header->delete();

        return response()->json(['message' => 'success', 'data' => ''], 200);
    }


}
