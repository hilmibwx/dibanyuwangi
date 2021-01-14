<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resto = Restaurant::all();
        return view ('admin.resto.index', compact('resto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.resto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resto = new Restaurant;
        $resto->title = $request->title;
        $resto->slug = \Str::slug($request->title);
        $resto->desc = $request->desc;
        $resto->keyword = $request->keyword;
        $resto->meta_desc = $request->meta_desc;

        $cover = $request->file('cover');

        if($cover){
        $cover_path = $cover->store('images/resto', 'public');

        $resto->cover = $cover_path;
        }

        if ($resto->save()) {

            return redirect()->route('admin.resto')->with('success', 'Data Berhasil Ditambahkan');
    
           } else {
               
            return redirect()->route('admin.resto.create')->with('error', 'Data Gagal Ditambahkan');
    
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
       $resto = Restaurant::findOrFail($id);
       return view ('admin.resto.edit', compact('resto'));
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
        $resto = Restaurant::findOrFail($id);
        $resto->title = $request->title;
        $resto->slug = \Str::slug($request->title);
        $resto->desc = $request->desc;
        $resto->keyword = $request->keyword;
        $resto->meta_desc = $request->meta_desc;

        $new_cover = $request->file('cover');

        if($new_cover){
        if($resto->cover && file_exists(storage_path('app/public/' . $resto->cover))){
            \Storage::delete('public/'. $resto->cover);
        }

        $new_cover_path = $new_cover->store('images/resto', 'public');

        $resto->cover = $new_cover_path;
    
        }

        if ($resto->update()) {

            return redirect()->route('admin.resto')->with('success', 'Data Berhasil Diperbarui');
    
           } else {
               
            return redirect()->route('admin.resto.edit')->with('error', 'Data Gagal Diperbarui');
    
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
        $resto = Restaurant::findOrFail($id);

        if ($resto->delete()) {
            if($resto->cover && file_exists(storage_path('app/public/' . $resto->cover))){
                \Storage::delete('public/'. $resto->cover);
            }

            return redirect()->route('admin.resto')->with('success', 'Data Berhasil Dihapus');
        }
    }
}
