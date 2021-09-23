<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Models\Show;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Shows the members of the band.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upcomings = Show::whereRaw('date >= CURDATE()')->orderBy('date', 'asc')->get();
        $pasts = Show::whereRaw('date < CURDATE()')->orderBy('date', 'desc')->get();

        return view('frontend.show', ['upcomings' => $upcomings, 'pasts' => $pasts]);
    }
}
