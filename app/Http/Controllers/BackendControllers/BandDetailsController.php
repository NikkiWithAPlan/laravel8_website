<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\BandDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BandDetailsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bandText = BandDetail::latest()->first();

        return view('backend.bandDetails.index')->with('bandText', $bandText);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bandText = BandDetail::latest()->first();

        return view('backend.bandDetails.create')->with('bandText', $bandText);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editor_data = $request->text;
        // $this->validate($request, [
		// 	'text' => 'required|string'
        // ]);

        // create new text content
        $bandText = new BandDetail;

        $bandText->text = $editor_data;

        $bandText->save();

        return redirect()->route('band_details.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bandText = BandDetail::find($id);

        return view('backend.bandDetails.index')->with('bandText', $bandText);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bandText = BandDetail::find($id);

        return view('backend.bandDetails.edit')->with('bandText', $bandText);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editor_data = $request->text;

        // update text content
        $bandText = BandDetail::find($id);

        $bandText->text = $editor_data;

        $bandText->save();

        return view('backend.bandDetails.index')->with('bandText', $bandText);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bandText = BandDetail::find($id);

        $bandText->delete();

        return BandDetail::all();
    }
}
