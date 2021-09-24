<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Models\Sponsor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SponsorsController extends Controller
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
        $sponsors = Sponsor::all();

		return view('frontend.sponsor')->with('sponsors', $sponsors);
    }
}
