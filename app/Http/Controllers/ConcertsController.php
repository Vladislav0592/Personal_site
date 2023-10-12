<?php

namespace App\Http\Controllers;


use App\Http\Requests\ConcertsRequest;
use App\Models\Concerts;
use Illuminate\Support\Facades\DB;


class ConcertsController extends Controller
{
    public function createEvent(ConcertsRequest $request): \Illuminate\Http\RedirectResponse
    {
        $concert = new Concerts();
        $concert->date = $request->input('date');
        $concert->time = $request->input('time');
        $concert->address = $request->input('address');
        $concert->description = $request->input('description');

        $concert->save();

        return redirect()->route('concerts');
    }

    public function getDataConcerts(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $concert = Concerts::orderBy('id', 'asc')->get();
        return view('concerts', ['concerts' => $concert]);
    }
    public function showEventForm($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $concert = DB::table('concerts')->find($id);

        return view('event-one-form', ['concert' => $concert]);
    }

    public function updateEvent($id, ConcertsRequest $request): \Illuminate\Http\RedirectResponse
    {
        $concert = Concerts::find($id);
        $concert->date = $request->input('date');
        $concert->time = $request->input('time');
        $concert->address = $request->input('address');
        $concert->description = $request->input('description');

        $concert->save();
        return redirect()->route('concerts');
    }

    public function deleteEvent($id): \Illuminate\Http\RedirectResponse
    {
        Concerts::find($id)->delete();
        return redirect()->route('concerts')->with('success', 'Жень, ты удалил его!');
    }

}
