<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataArticles = Article::all();
        return view('home', ['articles' => $dataArticles,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $validateData = $request->validated();

            // ambil file
        $file = $request->file('img');

        // buat nama file unik
        $filename = time() . '_' . $file->getClientOriginalName();

        // simpan ke folder public/images/
        $file->move(public_path('images'), $filename);

        Article::create(
            [
                'title' => $validateData['title'],
                'image' => $filename,
                'deskripsi' => $validateData['deskripsi'],
                'slug' => $validateData['slug'],
            ]
        );

        return redirect()->route('article.index')->with('success', 'New Article Has Been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $validateData = $request->validated();

        // update slug jika judul berubah
        $article->slug = Str::slug($request->title);
        $article->title = $request->title;
        $article->deskripsi = $request->deskripsi;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);

        // hapus gambar lama
        if ($article->image && file_exists(public_path('images/' . $article->image))) {
            unlink(public_path('images/' . $article->image));
        }

        $article->image = $filename;

        }

        $article->update($validateData);

        return redirect()->route('article.index')->with('success', 'Article updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        if ($article->image && file_exists(public_path('images/' . $article->image))) {
        unlink(public_path('images/' . $article->image));
        }

        $article->delete();
        return redirect()->route('article.index')->with('success', 'Article deleted!');
    }
}
