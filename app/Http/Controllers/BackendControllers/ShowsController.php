<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\Show;
use Illuminate\Support\Facades\Storage;
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
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::all();
        return view('backend.shows.index')->with('shows', $shows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shows.create');
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
			'title' => 'required|string',
			'date' => 'required|date',
			'address' => 'required|string',
			'place_name' => 'required|string',
			'link' => 'nullable|url',
			'ticket' => 'nullable|string',
			'start_time' => 'nullable|string',
			'additional_info' => 'nullable|string'
        ]);
        
        // create new show
        $show = new Show;

        $show->title = $request->input('title');
        $show->date = date("Y-m-d", strtotime($request->input('date')));
        $show->address = $request->input('address');
        $show->place_name = $request->input('place_name');
        $show->link = $request->input('link');
        $show->ticket = $request->input('ticket');
        if (empty($request->input('start_time'))) {
            $show->start_time = null;
        } else {
            $show->start_time = date("H:i", strtotime($request->input('start_time')));
        }
        $show->additional_info = $request->input('additional_info');

        $show->save();

        return redirect()->route('shows.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Show::find($id);

        return view('backend.shows.show')->with('show', $show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Show::find($id);

        return view('backend.shows.edit')->with('show', $show);
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
			'title' => 'required|string',
			'date' => 'required|date',
			'address' => 'required|string',
			'place_name' => 'required|string',
			'link' => 'nullable|url',
			'ticket' => 'nullable|string',
			'start_time' => 'nullable|string',
			'additional_info' => 'nullable|string'
        ]);

        $show = Show::find($id);

        $show->title = $request->input('title');
        $show->date = date("Y-m-d", strtotime($request->input('date')));
        $show->address = $request->input('address');
        $show->place_name = $request->input('place_name');
        $show->link = $request->input('link');
        $show->ticket = $request->input('ticket');
        if (empty($request->input('start_time'))) {
            $show->start_time = null;
        } else {
            $show->start_time = date("h:i:s", strtotime($request->input('start_time')));
        }
        
        $show->additional_info = $request->input('additional_info');

        $show->save();

        return view('backend.shows.show')->with('show', $show);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Show::find($id);

        $show->delete();

        return redirect()->route('backend.shows.index')->with('success', 'Show has been deleted');
    }
}
