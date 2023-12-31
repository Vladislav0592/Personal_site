<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use App\Http\Requests\LinksRequest;
use App\Models\home;
use App\Models\links;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $links=Links::query()->get();
        return view('/home', [
            'links'=>$links??collect()
        ]);
    }

}
