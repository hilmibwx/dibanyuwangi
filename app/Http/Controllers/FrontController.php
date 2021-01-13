<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{General, Travel};

class FrontController extends Controller
{
    public function home()
    {
        $general = General::find(1);
        $travel = Travel::orderBy('id','desc')->limit(3)->get();
        return view ('welcome', compact('general','travel'));
    }

    public function wisata()
    {
        return view ('front.wisata');
    }

    public function akomodasi()
    {
        return view ('front.akomodasi');
    }

    public function caferesto()
    {
        return view ('front.caferesto');
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
