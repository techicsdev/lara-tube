<?php

namespace Laratube\Http\Controllers;

use Illuminate\Http\Request;
use Laratube\Video;
use Laratube\Http\Requests\Videos\UpdateVideoRequest;
use Illuminate\Support\Facades\Storage;
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
            $request->thumbnail->storeAs('/public/thumbnails/', $video->id.'.png');
        }
        return redirect('/channels/'.$video->channel_id);
    }

    public function delete(Request $request,Video $video)
    {
        Storage::delete('public/thumbnails/'.$video->id.'.png');
        Storage::deleteDirectory('/public/videos/'.$video->id);
        $channel_id=$video->channel_id;
        $video->delete();
        return redirect('/channels/'.$channel_id);
    }
}
