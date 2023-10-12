<?php

namespace App\Http\Controllers;


use App\Http\Requests\LinksRequest;
use App\Models\links;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{
    public function addlinks(LinksRequest $request)
    {
        $links = new Links();
        $links->youtube = $request->input('youtube');
        $links->email = $request->input('email');
        $links->instagram = $request->input('instagram');
        $links->facebook = $request->input('facebook');
        $links->vk = $request->input('vk');
        $links->save();
        return redirect()->route('home');
    }

    public function getData(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $links = DB::table('links')->get();
        return view('home', ['links' => $links]);
        ;
    }

    public function updatelinks($id, LinksRequest $request)
    {
        $links = Links::find($id);
        $links->youtube = $request->input('youtube');
        $links->email = $request->input('email');
        $links->instagram = $request->input('instagram');
        $links->facebook = $request->input('facebook');
        $links->vk = $request->input('vk');
        $links->save();
        return redirect()->route('home');
    }
    public function deleteEvent($id): \Illuminate\Http\RedirectResponse
    {
        Links::find($id)->delete();
        return redirect()->route('concerts')->with('success', 'Жень, ты удалил его!');
    }
}
