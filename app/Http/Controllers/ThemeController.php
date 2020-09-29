<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class ThemeController extends Controller
{
    public function show(Theme $theme)
    {
        return view('themes.show', ['theme' => $theme]);
    }
}
