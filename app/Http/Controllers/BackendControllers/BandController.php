<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class BandController extends Controller
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
        $bandMembers = Band::all();
        
        return view('backend.bandMembers.index')->with('bandMembers', $bandMembers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bandMembers.create');
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
			'member_name' => 'required|string',
			'instrument' => 'required|string',
        ]);

        // create new bandMember
        $bandMember = new Band;

        $bandMember->member_name = $request->input('member_name');
        $bandMember->instrument = $request->input('instrument');

        $bandMember->save();

        return redirect()->route('band.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bandMember = Band::find($id);

        return view('backend.bandMembers.show')->with('bandMember', $bandMember);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bandMember = Band::find($id);

        return view('backend.bandMembers.edit')->with('bandMember', $bandMember);

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
        $this->validate($request, [
			'member_name' => 'required|string',
        ]);

        $bandMember = Band::find($id);

        $bandMember->member_name = $request->input('member_name');

        $bandMember->save();

        return redirect()->route('band.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bandMember = Band::find($id);

        $bandMember->delete();

        return Band::all();

    }
}
