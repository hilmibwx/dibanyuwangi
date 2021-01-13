<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travel = Travel::all();
        return view ('admin.travel.index', compact('travel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.travel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $travel = new Travel;
        $travel->title = $request->title;
        $travel->slug = \Str::slug($request->title);
        $travel->desc = $request->desc;
        $travel->keyword = $request->keyword;
        $travel->meta_desc = $request->meta_desc;

        $cover = $request->file('cover');

        if($cover){
        $cover_path = $cover->store('images/wisata', 'public');

        $travel->cover = $cover_path;
        }

        if ($travel->save()) {

            return redirect()->route('admin.travel')->with('success', 'Data Berhasil Ditambahkan');
    
           } else {
               
            return redirect()->route('admin.travel.create')->with('error', 'Data Gagal Ditambahkan');
    
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $travel = Travel::findOrFail($id);
        return view ('admin.travel.edit', compact('travel'));
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
        $travel = Travel::findOrFail($id);
        $travel->title = $request->title;
        $travel->slug = \Str::slug($request->title);
        $travel->desc = $request->desc;
        $travel->keyword = $request->keyword;
        $travel->meta_desc = $request->meta_desc;

        $new_cover = $request->file('cover');

        if($new_cover){
        if($travel->cover && file_exists(storage_path('app/public/' . $travel->cover))){
            \Storage::delete('public/'. $travel->cover);
        }

        $new_cover_path = $new_cover->store('images/wisata', 'public');

        $travel->cover = $new_cover_path;
    
        }

        if ($travel->update()) {

            return redirect()->route('admin.travel')->with('success', 'Data Berhasil Diperbarui');
    
           } else {
               
            return redirect()->route('admin.travel.edit')->with('error', 'Data Gagal Diperbarui');
    
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $travel = Travel::findOrFail($id);

        if ($travel->delete()) {
            if($travel->cover && file_exists(storage_path('app/public/' . $travel->cover))){
                \Storage::delete('public/'. $travel->cover);
            }

            return redirect()->route('admin.travel')->with('success', 'Data Berhasil Dihapus');
        }
    }
}
