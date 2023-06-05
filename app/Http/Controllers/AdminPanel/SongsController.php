<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Songs;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Songs::all();
        return view('admin.songs.index' , [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Songs();

        $data->parent_id = 0;

        $data->artist= $request->artist;

        $data->song= $request->song;

        $data->album = $request->album;

        $data->genre = $request->genre;

        $data->save();

        return redirect('/admin/songs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Songs  $songs
     * @return \Illuminate\Http\Response
     */
    public function show(Songs $songs, $id)
    {
        $data= Songs::find($id);
        return view('admin.songs.show' , [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Songs  $songs
     * @return \Illuminate\Http\Response
     */
    public function edit(Songs $songs, $id)
    {
        $data= Songs::find($id);
        return view('admin.songs.edit' , [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Songs  $songs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Songs $songs, $id)
    {
        $data= Songs::find($id);
        $data->parent_id = 0;

        $data->artist= $request->artist;

        $data->song= $request->song;

        $data->album = $request->album;

        $data->genre = $request->genre;

        $data->save();

        return redirect('/admin/songs');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Songs  $songs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Songs $songs, $id)
    {
        $data= Songs::find($id);
        $data->delete();
        return redirect('/admin/songs');

    }
}

