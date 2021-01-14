<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{General, Hotel, Restaurant, Travel};

class FrontController extends Controller
{
    public function home()
    {
        $general = General::find(1);
        $hotel = Hotel::orderBy('id','desc')->limit(3)->get();
        $resto = Restaurant::orderBy('id','desc')->limit(3)->get();
        $travel = Travel::orderBy('id','desc')->limit(3)->get();
        return view ('welcome', compact('general','hotel','resto','travel'));
    }

    public function wisata()
    {
        $general = General::find(1);
        $travels = Travel::orderBy('id','desc')->paginate(9);
        return view ('front.wisata', compact('general','travels'));
    }

    public function wisatashow($slug)
    {
        $general = General::find(1);
        $travel = Travel::where('slug', $slug)->firstOrFail();
        return view ('front.wisatashow', compact('general','travel'));
    }

    public function akomodasi()
    {
        $general = General::find(1);
        $hotels = Hotel::orderBy('id','desc')->paginate(9);
        return view ('front.akomodasi',compact('general','hotels'));
    }

    public function akomodasishow($slug)
    {
        $general = General::find(1);
        $hotel = Hotel::where('slug', $slug)->firstOrFail();
        return view ('front.akomodasishow', compact('general','hotel'));
    }

    public function caferesto()
    {
        $general = General::find(1);
        $restos = Restaurant::orderBy('id','desc')->paginate(9);
        return view ('front.caferesto', compact('general','restos'));
    }

    public function caferestoshow($slug)
    {
        $general = General::find(1);
        $resto = Restaurant::where('slug', $slug)->firstOrFail();

        return view ('front.caferestoshow', compact('general','resto'));
    }

    public function artikel()
    {
        return view ('front.artikel');
    }

    public function artikelshow()
    {
        return view ('front.artikelshow');
    }

    public function contact()
    {
        $general = General::find(1);
        return view ('front.contact', compact('general'));
    }
}
