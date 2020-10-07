<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\User;
use App\Theme;
use Carbon\Carbon;
use Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ArticleRequest;
// use Intervention\Image\Facades\Image;



class ArticleController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Article::class, 'article');
    }

    public function index(Theme $theme)
    {
        $user     = Auth::user();
        $theme    = Theme::where('apply', 1)->first();
   
        $articles = Article::orderBy('created_at', 'DESC')->paginate(5);
        $articles->load('user', 'keeps');
        
        return view('articles.index', [
            'articles' => $articles, 
            'user' => $user,
            'theme' => $theme,
        ]);
    }

    public function popular(Article $article)
    {
        $user     = Auth::user();
        $theme    = Theme::where('apply', 1)->first();


        $articles = Article::withCount('keeps')->orderBy('keeps_count', 'DESC')->paginate(5);
        $articles->load('user', 'keeps');

        return view('articles.popular', [
            'articles' => $articles,
            'user' => $user,
            'theme' => $theme,
        ]);
    }


    public function search(Request $request)
    {
        $user     = Auth::user();

        $keyword     = $request->input('keyword');
        $style       = $request->input('style');
        $position    = $request->input('position');

        $query = Article::query();

        if(!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%");
        }

        if($style === '1') {
            $query->where('style', '漫才');
        } 
        if($style === '2') {
            $query->where('style', 'コント');
        } 
        if($style === '3') {
            $query->where('style', 'その他');
        } 

        if($position === '1') {
            $query->where('position', 'ボケ');
        } 
        if($position === '2') {
            $query->where('position', 'ツッコミ');
        } 
        if($position === '3') {
            $query->where('position', '作家');
        } 
        if($position === '4') {
            $query->where('position', 'その他');
        } 

        $articles = $query->get()->sortByDesc('created_at')->sortByDesc('keeps')
                    ->load('user');

        return view('articles.search', [
            'articles' => $articles, 
            'user' => $user,
            'keyword' => $keyword,
            'style'  => $style,
            'position' => $position,
        ]);
    }

    public function create(Article $article) 
    {
        return view('articles.create', ['article' => $article]);
    }

    public function store(ArticleRequest $request, Article $article)
    {

        $article->fill($request->all());
   

        // $imagefile = $request->file('image');  

        // if(isset($imagefile)){
        //     $now = date_format(Carbon::now(), 'YmdHis');
        //     $fileName = ($imagefile)->getClientOriginalName();

        //     $storePath="articles/".$now."_".$fileName;

        //     $image = Image::make($imagefile);
        //     $image->resize(978,398);


        //     Storage::disk('s3')->put($storePath, (string)$image->encode(), 'public');

        //     $article->image = Storage::disk('s3')->url($storePath);
        // };

        $file = $request->file('image');

        if(isset($file)) {
            $fileName = $file->getClientOriginalName();
            $path = Storage::disk('s3')->putFileAs('articles',$file, $fileName, 'public');

            $article->image = Storage::disk('s3')->url($path);
        }
     
        $article->user_id = $request->user()->id; 

        $request->session()->put('articles.create', $article);
     

        return redirect()->action('ArticleController@confirm');

    }

    public function confirm(Request $request, Article $article)
    {
        $article = $request->session()->get("articles.create");

		if(!$article){
			return redirect()->action("ArticleController@create");
		}  
		return view("articles.confirm",['article' => $article]);
    }

    public function send(Request $request, Article $article)
    {
        $article = $request->session()->get("articles.create");

        if(!$article){
            return redirect()->action("ArticleController@create");
        }
        
        $article->save();

        $request->session()->forget("article.create");

        Session::flash('flash_message', '投稿が完了しました');

        return redirect()->route('articles.index', ['article' => $article]);
    }

    public function edit(Article $article)
    {  
        return view('articles.edit', ['article' => $article]);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());

        // $imagefile = $request->file('image'); 

        // if(isset($imagefile)){
        //     $now = date_format(Carbon::now(), 'YmdHis');
        //     $fileName = ($imagefile)->getClientOriginalName();

        //     $storePath="articles/".$now."_".$fileName;

        //     $image = Image::make($imagefile);
        //     $image->resize(300,300);


        //     Storage::disk('s3')->put($storePath, (string)$image->encode(), 'public');

        //     $article->image = Storage::disk('s3')->url($storePath);
        // };

        $file = $request->file('image');

        if(isset($file)) {
            $fileName = $file->getClientOriginalName();
            $path = Storage::disk('s3')->putFileAs('articles',$file, $fileName, 'public');

            $article->image = Storage::disk('s3')->url($path);
        }
     

        $request->session()->put('articles.edit', $article);

        return redirect()->action('ArticleController@confirmEdit');

    }

    public function confirmEdit(Request $request, Article $article)
    {

        $article = $request->session()->get("articles.edit");

		if(!$article){
			return redirect()->action("ArticleController@edit");
		}  
		return view("articles.confirmEdit",['article' => $article]);
    }

    public function sendPatch(Request $request, Article $article)
    {
        $article = $request->session()->get("articles.edit");

        if(!$article){
            return redirect()->action("ArticleController@edit");
        }
        
        $article->save();

        $request->session()->forget("article.edit");

        Session::flash('edit_success', '編集が完了しました');

        return redirect()->route('articles.index', ['article' => $article]);
    }


    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index');
    }

    public function show(Article $article, User $user)
    {
        $user     = Auth::user();
        return view('articles.show', ['article' => $article, 'user' => $user]);
    }

    public function keep(Request $request, Article $article )
    {
        $user = Auth::user();

        if($article->user->id === $user->id) {
            return abort('404', 'Cannot keep yourself.');
        }

        $article->keeps()->detach($request->user()->id);
        $article->keeps()->attach($request->user()->id);

        return [
            'id' => $article->id,
            'countKeeps' => $article->count_keeps,
        ];
    }

    public function unkeep(Request $request, Article $article)
    {
        $article->keeps()->detach($request->user()->id);

        return [
            'id' => $article->id,
            'countKeeps' => $article->count_keeps,
        ];
    }

    
}


