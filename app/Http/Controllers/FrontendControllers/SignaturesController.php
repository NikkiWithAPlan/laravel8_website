<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Models\Signature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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
        // create new Signature
        $sign = new Signature;

        $sign->name = $request->input('name');
        $sign->body = $request->input('body');

        $sign->save();

        return redirect()->route('signaturesPage')->with('success','Post created successfully!');
    }

    public function validateGCaptch(Request $request) {

        $input = $request->all();

        $validator = Validator::make($input,[
            'name' => 'required|min:3|max:50',
            'body' => 'required|min:3',
            'g-recaptcha-response' => 'required',
        ]);

        if ($validator->passes()){
            SignaturesController::store($request);
        }

        return redirect()->back()->withErrors($validator)->withInput();
    }

}
