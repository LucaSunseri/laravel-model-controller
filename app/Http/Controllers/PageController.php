<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $titolo = 'Pagina 2';
        return view('page2', compact('titolo'));
    }

    public function page3()
    {
        $titolo = 'Titolo';
        return view('page3', compact('titolo'));
    }
}
