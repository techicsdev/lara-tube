<?php

namespace Laratube\Http\Controllers;
use Illuminate\Support\Facades\Storage;
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
        Storage::delete('public/thumbnails/' . $video->id.'.png');
        if($request->has('thumbnail')){
            $this->upload_image('/storage/thumbnails',$request->thumbnail,$video->id.'.png');
        }
        return redirect('/channels/'.$video->channel_id);
    }

    public function upload_image($uploadPath, $file, $storeName){
        if ($file) {
            try {
                if ($file->isValid()) {
                    if ($file->move(public_path($uploadPath), $storeName)) {
                        return $storeName;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } catch (\Exception $e) { }
        }
        return false;
    }
}
