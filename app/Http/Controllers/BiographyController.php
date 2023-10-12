<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BiographyRequest;
use App\Models\Biographies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiographyController extends Controller
{
    public function addBiography(BiographyRequest $request): \Illuminate\Http\RedirectResponse
    {
        $biogr = new Biographies();
        $biogr->text = $request->input('text');
        $biogr->save();
        return redirect()->route('biography');

    }
    public function getBiography(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $biogr= Biographies::all();
        return view('biography', ['biography'=> $biogr]);
    }
}
