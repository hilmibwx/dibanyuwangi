<?php

namespace App\Http\Controllers;
use App\{General, Hotel, Post, Restaurant, Travel};
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function dashboard()
    {    
        $wisata = Travel::count();
        $hotel = Hotel::count();
        $resto = Restaurant::count();
        $post = Post::where('status','PUBLISH')->count();
        return view ('admin.dashboard', compact('wisata','hotel','resto','post'));
    }

    public function general(){
        $general = General::find(1);
        return view ('admin.general',[
            'general' => $general
        ]);
    }

    public function generalUpdate(Request $request)
    {
        \Validator::make($request->all(), [
     
            "title" => "required",
            "address1" => "required",
            "phone" => "required" ,
            "email" => "required",
            "footer" => "required"       
        ])->validate();

        $general = General::find(1);
        $general->title = $request->title;
        $general->name = $request->name;
        $general->address1 = $request->address1;
        $general->address2 = $request->address2;
        $general->phone = $request->phone;
        $general->email = $request->email;
        $general->twitter = $request->twitter;
        $general->facebook = $request->facebook;
        $general->instagram = $request->instagram;
        $general->footer = $request->footer;
        $general->gmaps = $request->gmaps;
        $general->tawkto = $request->tawkto;
        $general->disqus = $request->disqus;
        $general->sharethis = $request->sharethis;
        $general->gverification = $request->gverification;
        $general->keyword = $request->keyword;
        $general->meta_desc = $request->meta_desc;

        $new_logo = $request->file('logo');

        if($new_logo){
        if($general->logo && file_exists(storage_path('app/public/' . $general->logo))){
            \Storage::delete('public/'. $general->logo);
        }

        $new_cover_path = $new_logo->store('images/general', 'public');

        $general->logo = $new_cover_path;
        }

        $new_favicon = $request->file('favicon');

        if($new_favicon){
        if($general->favicon && file_exists(storage_path('app/public/' . $general->favicon))){
            \Storage::delete('public/'. $general->favicon);
        }

        $new_cover_path = $new_favicon->store('images/general', 'public');

        $general->favicon = $new_cover_path;
        }


        // dd($general);
        if ( $general->save()) {

            return redirect()->route('admin.general')->with('success', 'Data updated successfully');
    
           } else {
               
            return redirect()->route('admin.general')->with('error', 'Data failed to update');
    
           }
    }
}
