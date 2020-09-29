<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;
use App\Answer;

class ThemeController extends Controller
{
    public function show(Theme $theme)
    {
        $id = $theme->id;

        $answers = Answer::where('theme_id', $id)->orderBy('created_at', 'DESC')->paginate(10);

        return view('themes.show', [
            'theme' => $theme,
            'answers' => $answers,
        ]);
    }
}
