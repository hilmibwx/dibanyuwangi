<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::all();
        return view('admin.hotel.index', compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel = new Hotel;
        $hotel->title = $request->title;
        $hotel->slug = \Str::slug($request->title);
        $hotel->type = $request->type;
        $hotel->desc = $request->desc;
        $hotel->link = $request->link;
        $hotel->keyword = $request->keyword;
        $hotel->meta_desc = $request->meta_desc;

        $cover = $request->file('cover');

        if($cover){
        $cover_path = $cover->store('images/penginapan', 'public');

        $hotel->cover = $cover_path;
        }

        if ($hotel->save()) {

            return redirect()->route('admin.hotel')->with('success', 'Data Berhasil Ditambahkan');
    
           } else {
               
            return redirect()->route('admin.hotel.create')->with('error', 'Data Gagal Ditambahkan');
    
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
        $hotel = Hotel::findOrFail($id);
        return view ('admin.hotel.edit', compact('hotel'));
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
        $hotel = Hotel::findOrFail($id);
        $hotel->title = $request->title;
        $hotel->slug = \Str::slug($request->title);
        $hotel->type = $request->type;
        $hotel->desc = $request->desc;
        $hotel->link = $request->link;
        $hotel->keyword = $request->keyword;
        $hotel->meta_desc = $request->meta_desc;

        $new_cover = $request->file('cover');

        if($new_cover){
        if($hotel->cover && file_exists(storage_path('app/public/' . $hotel->cover))){
            \Storage::delete('public/'. $hotel->cover);
        }

        $new_cover_path = $new_cover->store('images/penginapan', 'public');

        $hotel->cover = $new_cover_path;
    
        }

        if ($hotel->update()) {

            return redirect()->route('admin.hotel')->with('success', 'Data Berhasil Diperbaui');
    
           } else {
               
            return redirect()->route('admin.hotel.create')->with('error', 'Data Gagal Diperbaui');
    
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
        $hotel = Hotel::findOrFail($id);

        if ($hotel->delete()) {
            if($hotel->cover && file_exists(storage_path('app/public/' . $hotel->cover))){
                \Storage::delete('public/'. $hotel->cover);
            }

            return redirect()->route('admin.hotel')->with('success', 'Data Berhasil Dihapus');
        }
    }
}
