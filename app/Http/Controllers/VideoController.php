<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        return response()->json(Video::latest()->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'video' => 'required|mimes:mp4,mov,avi,webm|max:51200', // max 50MB
        ]);

        $path = $request->file('video')->store('videos', 'public');

        $video = Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_path' => $path,
        ]);

        return response()->json($video, 201);
    }

    public function show($id)
    {
        return response()->json(Video::findOrFail($id));
    }
}
