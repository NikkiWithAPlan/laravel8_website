<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Models\Album;
use App\Models\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumsController extends Controller
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
        $albums = Album::with('Photos')->get();
        return view('frontend.photos.albums')->with('albums', $albums);
    }

    public function getAlbum($id) {
        $album = Album::with('Photos')->find($id);

        return view('frontend.photos.album')->with('album', $album);
    }
}
