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
     * Sows the signatures
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signatures = Signature::orderBy('created_at', 'desc')->get();

		return view('frontend.signature')->with('signatures', $signatures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required|min:3|max:50',
			'body' => 'required|min:3',
        ]);
        
        // create new Signature
        $sign = new Signature;

        $sign->name = $request->input('name');
        $sign->body = $request->input('body');

        $sign->save();

        return redirect()->route('signaturesPage')->with('success','Post created successfully!');
    }
}
