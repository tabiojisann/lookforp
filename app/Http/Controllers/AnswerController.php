<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Theme;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AnswerRequest;


class AnswerController extends Controller
{
    public function store(AnswerRequest $request, Answer $answer, Theme $theme)
    {
        $theme = Theme::where('apply', 1)->first();

        if($request->user()->answer()->count() === 0) {

            $answer->fill($request->all());
    
            $answer->user_id  = $request->user()->id;
            $answer->theme_id = $theme->id;
    
            $answer->save();
            return redirect()->route('themes.show', ['theme' => $theme]);
        }

        Session::flash('once', '2つ以上回答できません');
        
        return redirect()->route('themes.show', ['theme' => $theme]);
    }

    public function destroy(Answer $answer, Theme $theme)
    {
        $theme = Theme::where('apply', 1)->first();

        $answer->delete();

        return redirect()->route('themes.show', ['theme' => $theme]);
    }
}
