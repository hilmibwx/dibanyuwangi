<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view ('welcome');
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
        return view ('front.contact');
    }
}
