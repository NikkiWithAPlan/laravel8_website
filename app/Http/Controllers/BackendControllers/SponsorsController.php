<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\Sponsor;
use Illuminate\Support\Facades\Storage;
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
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsor::all();

		return view('backend.sponsors.index')->with('sponsors', $sponsors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SponsorsController::save($request);

		return redirect()->route('sponsors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsor = Sponsor::find($id);

		return view('backend.sponsors.show')->with('sponsor', $sponsor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsor = Sponsor::find($id);

        return view('backend.sponsors.edit')->with('sponsor', $sponsor);
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
        $sponsor = Sponsor::find($id);

        // delete the sponsor first
        SponsorsController::delete($sponsor);

        // create a new sponsor and save it
        SponsorsController::save($request);

        return redirect()->route('sponsors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);

		if (Storage::path($sponsor->logo)) {
            // call delete function
            SponsorsController::delete($sponsor);

			return redirect()->route('sponsors.index')->with('success', 'Sponsor has been deleted');
		}
    }

    private function save(Request $request)
    {
        
        // Get filename with extension
		$fileNameWithExt = $request->file('logo')->getClientOriginalName();
        
		// Get just the filename
		$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

		// Get extension
		$extension = $request->file('logo')->getClientOriginalExtension();

		// Create new filename
		$filenameToStore = $fileName.'_'.time().'.'.$extension;

		// Create sponsor
		$sponsor = new Sponsor;
        $sponsor->title = $request->input('title');
        $sponsor->url = $request->input('url');
        $sponsor->logo = $filenameToStore;

        $sponsor->save();

		// Upload file
		$path = $request->file('logo')->storeAs('public/sponsor_logo/', $filenameToStore);
    }

    private function delete(Sponsor $sponsor)
    {
        if (Storage::path($sponsor->logo)) {
            // delete logo from storage
            $sponsorDirectory = 'public/sponsor_logo/';
            Storage::delete($sponsorDirectory.$sponsor->logo);
			
            // delete sponsor from DB
            $sponsor->delete();
        }
    }
}
