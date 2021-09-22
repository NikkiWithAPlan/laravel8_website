<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Models\Band;
use App\Models\BandDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BandsController extends Controller
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
        $members = Band::all();
        $bandtext = BandDetail::latest()->first();

        return view('frontend.band', [
            'members' => $members,
            'bandtext' => $bandtext
        ]);
    }

}
