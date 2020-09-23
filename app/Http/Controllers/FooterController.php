<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function terms()
    {
        return view('footer.terms');
    }

    public function help()
    {
        return view('footer.help');
    }

    public function privacy()
    {
        return view('footer.privacy');
    }

}
