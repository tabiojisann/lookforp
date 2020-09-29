<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Theme;
use App\Http\Requests\AnswerRequest;


class AnswerController extends Controller
{
    public function store(AnswerRequest $request, Answer $answer, Theme $theme)
    {
        $answer->fill($request->all());

        $theme = Theme::where('apply', 1)->first();

        $answer->user_id  = $request->user()->id;
        $answer->theme_id = $theme->id;

        $answer->save();

        return redirect()->route('themes.show', ['theme' => $theme]);
    }

    public function destroy(Answer $answer, Theme $theme)
    {
        $theme = Theme::where('apply', 1)->first();

        $answer->delete();

        return redirect()->route('themes.show', ['theme' => $theme]);
    }
}
