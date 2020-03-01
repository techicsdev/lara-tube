<?php

namespace Laratube\Http\Controllers;

use Illuminate\Http\Request;
use Laratube\Video;
use Laratube\Http\Requests\Videos\UpdateVideoRequest;

class VideoController extends Controller
{
    public function show(Video $video)
    {
        if (request()->wantsJson()) {
            return $video;
        }
        $videos=Video::all()->random(3);
        return view('video', compact('video'))->with('videos',$videos);
    }

    public function updateViews(Video $video)
    {
        $video->increment('views');

        return response()->json([]);
    }

    public function update(UpdateVideoRequest $request,  Video $video) {
        $video->update($request->only(['title', 'description']));

        return redirect()->back();
    }
}
