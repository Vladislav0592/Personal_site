<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{

    public function submit(VideoRequest $request): \Illuminate\Http\RedirectResponse
    {
        $video = new Video();
        $video->link = $request->input('link');
        $video->description = $request->input('description');
        $video->save();

        return redirect()->route('video');
    }

    public function allData(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $video = Video::orderBy('id', 'desc')->get();
        return view('video', ['videos' => $video]);
    }
   public function showOneForm($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
   {
        $video =DB::table('videos')->find($id);
        return view('video-one-form', ['video' => $video]);
    }

    public function update_video_submit($id, VideoRequest $request): \Illuminate\Http\RedirectResponse
    {
        $video = Video::find($id);
        $video->link = $request->input('link');
        $video->description = $request->input('description');
        $video->save();

        return redirect()->route('video');
    }
    public function deleteVideoForm($id)
    {
        Video::find($id)->delete();
        return redirect()->route('video')->with('success', 'Жень, ты удалил его!');
    }
}
