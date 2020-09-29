<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ThemeRequest;
use Storage;

use App\Theme;
use App\Admin;

class ThemeController extends Controller
{

    // public function __construct()
    // {
    //     $this->authorizeResource(Theme::class, 'theme');
    // }

    public function index() {

        $themes = Theme::all();
        $applyTheme  = Theme::where('apply', 1)->first();

        return view('admin.theme.index', [
            'themes' => $themes,
            'applyTheme'  => $applyTheme,
        ]);
    }

    public function edit(Theme $theme)
    {        
        return view('admin.theme.edit', ['theme' => $theme,]);
    }

    public function update(Theme $theme)
    {
        $applyTheme  = Theme::where('apply', 1)->first();
        
        $applyTheme->update(['apply' => 0]);
        $theme->update(['apply' => 1]);

        $theme->save();

        return redirect()->route('admin.themes.index');
    }

    public function create() {
        return view('admin.theme.create');
    }

    public function store(Theme $theme, ThemeRequest $request) {
        $theme->fill($request->all());

        $file = $request->file('image');

        if(isset($file)) {
            $fileName = $file->getClientOriginalName();
            $path = Storage::disk('s3')->putFileAs('themes',$file, $fileName, 'public');
            $theme->image = Storage::disk('s3')->url($path);
        }
     
        $theme->admin_id = 1;

        $theme->save();

        return redirect()->route('admin.home');

    }

    public function destroy(Theme $theme) {

        if($theme->apply === 1){
            abort(404, '消せません');
        }
        $theme->delete();

        return redirect()->route('admin.themes.index');
    }
}
