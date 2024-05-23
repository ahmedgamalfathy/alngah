<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::paginate(12);
        return view('admin.articles.index',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all());
       $data= request()->validate([
            'title'=>'required|min:3|string',
            'author'=>'required|min:3|string',
            'body'=>'required|min:3|string',
            'img'=>'required|file|mimes:png,jpg,jpeg',
        ]);
        // dd($data);
        if(request()->File('img')){
            // $path =request('img')->store('articles');
            // $data['img']=$path;
            $image=$request->file('img');
            $filename = $image->getClientOriginalName();
            $request->img->move(public_path('articles'),$filename);
            $data['img']= $request->file('img')->getClientOriginalName();
        }
        Article::create($data);
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.articles.show',['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $data= request()->validate([
            'title'=>'required|min:3|string',
            'author'=>'required|min:3|string',
            'body'=>'required|min:3|string',
            'img'=>'required|file|mimes:png,jpg,jpeg',
        ]);
        // dd($data);
        if(request()->hasFile('img')){
            // $path =request('img')->store('articles');
            // $data['img']=$path;
            $image=$request->file('img');
            $filename = $image->getClientOriginalName();
            $request->img->move(public_path('articles'),$filename);
            $data['img']= $request->file('img')->getClientOriginalName();
        }
       $article->update($data);
        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
      $article->delete();
      return redirect()->route('articles.index');
    }
}
