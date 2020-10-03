<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Theme;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AnswerRequest;


class AnswerController extends Controller
{

    public function index(Theme $theme)
    {
        $id = $theme->id;

        $answers = Answer::where('theme_id', $id)->orderBy('created_at', 'DESC')->paginate(10);

        return view('answers.index', [
            'theme' => $theme,
            'answers' => $answers,
        ]);
    }

    public function store(AnswerRequest $request, Answer $answer, Theme $theme)
    {
        $theme = Theme::where('apply', 1)->first();

        // お題に対する回答 全取得
        $answers = $theme->answer;
        
        // ユーザーがすでに回答済みの場合これを取得
        $themeAnswer = $answers->where('user_id', $request->user()->id)->first();

        // ユーザーが回答してない場合のみデータ保存
        if(empty($themeAnswer)) {

            $answer->fill($request->all());
    
            $answer->user_id  = $request->user()->id;
            $answer->theme_id = $theme->id;
    
            $answer->save();
            return redirect()->route('answers.index', ['theme' => $theme]);
        }

        Session::flash('once', '2つ以上回答できません');
        
        return redirect()->route('answers.index', ['theme' => $theme]);
    }

    public function destroy(Answer $answer, Theme $theme)
    {
        $theme = Theme::where('apply', 1)->first();

        $answer->delete();

        return redirect()->route('answers.index', ['theme' => $theme]);
    }

    public function like(Request $request, Answer $answer)
    {

        if($answer->user->id === $request->user()->id) {
            return abort('404', 'Cannot keep yourself.');
        }

        $answer->likes()->detach($request->user()->id);
        $answer->likes()->attach($request->user()->id);

        return [
            'id' => $answer->id,
            'countLikes' => $answer->count_likes,
        ];
    }

    public function unlike(Request $request, Answer $answer)
    {
        $answer->likes()->detach($request->user()->id);

        return [
            'id' => $answer->id,
            'countLikes' => $answer->count_likes,
        ];
    }
}
