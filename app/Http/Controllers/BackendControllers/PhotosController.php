<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotosController extends Controller
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
        $photos = Photo::all();

        return view('backend.photos.index')->with('photos', $photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album_id)
    {
        return view('backend.photos.create')->with('album_id', $album_id);
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
			'title' => 'required',
			'photo' => 'image|max:1999'
		]);

        $album_id = $request->input('album_id');

		// Get filename with extension
		$fileNameWithExt = $request->file('photo')->getClientOriginalName();

		// Get just the filename
		$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

		// Get extension
		$extension = $request->file('photo')->getClientOriginalExtension();

		// Create new filename
		$filenameToStore = $fileName.'_'.time().'.'.$extension;

		// Upload file
		$path = $request->file('photo')->storeAs('photos/'.$album_id, $filenameToStore);

		// Upload photo
		$photo = new Photo;
		$photo->album_id = $album_id;
		$photo->title = $request->input('title');
		$photo->size = $request->file('photo')->getClientSize();
		$photo->photo = $filenameToStore;

		$photo->save();

		return redirect()->route('albums.show', $album_id)->with('success', 'Photo uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);

		return view('backend.photos.show')->with('photo', $photo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);

		if (Storage::delete('photos/'.$photo->album_id.'/'.$photo->photo)) {
			$photo->delete();

			return redirect('/album')->with('success', 'Photo has been deleted');
		}
    }
}
