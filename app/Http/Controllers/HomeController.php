<?php

namespace Laratube\Http\Controllers;

use Laratube\Video;
use Laratube\Channel;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }


    public function show(Channel $channel)
    {
        $videos = $channel->videos()->paginate(1);

        return view('channels.arcive', compact('channel', 'videos'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $query = request()->search;

        $videos = collect();

        $channels = collect();

        if ($query) {
            $videos = Video::where('title', 'LIKE', "%{$query}%")->orWhere('description', 'LIKE', "%{$query}%")->paginate(5, ['*'], 'video_page');
            $channels = Channel::where('name', 'LIKE', "%{$query}%")->orWhere('description', 'LIKE', "%{$query}%")->paginate(5, ['*'], 'channel_page');
        }


        return view('home')->with([
            'videos' => $videos,
            'channels' => $channels
        ]);
    }
}
