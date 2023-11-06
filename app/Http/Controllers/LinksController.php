<?php

namespace App\Http\Controllers;


use App\Http\Requests\LinksRequest;
use App\Models\links;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{
    public function addlinks(LinksRequest $request)
    {
        if ($request->new_social && $request->new_url) {
            $link = new Links();
            $link->name = $request->input('new_social');
            $link->link = $request->input('new_url');
            $link->save();
        }
       // dd($request->all());
        if (isset($request->name) & count($request->name) > 0) {
            foreach ($request->name as $key=>$value) {
                $link = Links::query()->where('id', $key)->first();
                if ($link) {
                    $link->name = $value;
                    $link->link = $request->link[$key];
                    $link->save();
                }
            }
        }
        return redirect()->route('home');
    }

    public function getData(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $links = Links::query()->get();
        return view('home', ['links' => $links]);

    }

    public function deleteEvent($id): \Illuminate\Http\RedirectResponse
    {
        Links::find($id)->delete();
        return redirect()->route('concerts')->with('success', 'Жень, ты удалил его!');
    }
}
