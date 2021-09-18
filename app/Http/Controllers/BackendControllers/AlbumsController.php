<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\Album;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AlbumsController extends Controller
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
        $albums = Album::with('Photos')->get();

		return view('backend.albums.index')->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// Get filename with extension
		$fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
        
		// Get just the filename
		$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

		// Get extension
		$extension = $request->file('cover_image')->getClientOriginalExtension();

		// Create new filename
		$filenameToStore = $fileName.'_'.time().'.'.$extension;

		// Create album
		$album = new Album;
		$album->name = $request->input('name');
		$album->cover_image = $filenameToStore;

		$album->save();

		// Upload file
		$path = $request->file('cover_image')->storeAs('public/album_covers/'.$album->id, $filenameToStore);

		return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::with('Photos')->find($id);

		return view('backend.albums.show')->with('album', $album);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::find($id);

		if (Storage::path($album->cover_image)) {
            $directory = 'public/album_covers/'.$album->id;
            $files = Storage::allFiles($directory);
            Storage::delete($files);
			Storage::deleteDirectory($directory);
			$album->delete();

			return redirect()->route('albums.index')->with('success', 'Album has been deleted');
		}
    }
}
