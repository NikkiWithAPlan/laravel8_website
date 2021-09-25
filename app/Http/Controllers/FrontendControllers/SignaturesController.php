<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Models\Signature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SignaturesController extends Controller
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
        $signatures = Signature::orderBy('created_at', 'desc')->get();

		return view('frontend.signature')->with('signatures', $signatures);
    }
}
