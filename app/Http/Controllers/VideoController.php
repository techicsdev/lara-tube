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

        $videos=Video::all()->random(Video::count() > 3 ? 3 : 1 );
        return view('video', compact('video'))->with('videos',$videos);
    }

    public function updateViews(Video $video)
    {
        $video->increment('views');

        return response()->json([]);
    }

    public function edit(Video $video)
    {
        return view('edit')->with('video',$video);
    }

    public function update(UpdateVideoRequest $request,  Video $video) {
        $video->update($request->only(['title', 'description','thumbnail']));

        return redirect()->back();
    }

    public function updatevideo(Request $request,Video $video)
    {
        $video->update($request->only(['title']));

        if($request->has('thumbnail')){
            try{
                $is = $request->thumbnail->storeAs('/public/thumbnails/', $video->id.'.png','local');
                dd($is);
            }catch(\Exception $error){
                dd($error);
            }
        }
        if ($request->file('thumbnail')->isValid()) {
            dd($request->has('thumbnail'));
        }
        return redirect('/channels/'.$video->channel_id);
    }
}
