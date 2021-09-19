<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\Album;
use App\Models\Photo;
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
		// Create new filename
		$filenameToStore = AlbumsController::getFileNameToStore($request);

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::with('Photos')->find($id);

        return view('backend.albums.edit')->with('album', $album);
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
        $album = Album::find($id);

        // delete the album cover image from storage
        if (Storage::path($album->cover_image)) {
            $albumCoverDirectory = 'public/album_covers/'.$album->id;
            Storage::delete(Storage::allFiles($albumCoverDirectory));
        }

        // save the new cover image and update DB
        // Create new filename
		$filenameToStore = AlbumsController::getFileNameToStore($request);

		// Update album
		$album->name = $request->input('name');
		$album->cover_image = $filenameToStore;

		$album->save();

		// Upload file
		$path = $request->file('cover_image')->storeAs('public/album_covers/'.$album->id, $filenameToStore);
        
        return redirect()->route('albums.index');
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
        $photos = Photo::where('album_id', $album->id)->get();

		if (Storage::path($album->cover_image)) {
            // delete album from storage
            $albumCoverDirectory = 'public/album_covers/'.$album->id;
            Storage::delete(Storage::allFiles($albumCoverDirectory));
			Storage::deleteDirectory($albumCoverDirectory);

            // delete photos from storage
            $photoDirectory = 'public/photos/'.$album->id;
            Storage::delete(Storage::allFiles($photoDirectory));
			Storage::deleteDirectory($photoDirectory);
			
            // delete album from DB
            $album->delete();

            // delete photos from DB
            Photo::where('album_id', $album->id)->delete();

			return redirect()->route('albums.index')->with('success', 'Album has been deleted');
		}
    }

    private function getFileNameToStore(Request $request)
    {
        // Get filename with extension
		$fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
        
		// Get just the filename
		$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

		// Get extension
		$extension = $request->file('cover_image')->getClientOriginalExtension();

		// Create new filename
		$filenameToStore = $fileName.'_'.time().'.'.$extension;

        return $filenameToStore;
    }
}
