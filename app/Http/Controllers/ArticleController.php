<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view("admin.articles", ["articles" => Article::latest()->get()]);
    }

    public function create()
    {
        return view("admin.formarticle");
    }

    public function store(Request $request) {
        $imagePath = $request->file('image')->store('uploads', "public");
        Article::create([
            'title' => $request->title,
            'tumbnail' => $imagePath,
            'description' => $request->description
        ]);

        return redirect('/adminArticles');
    }

    public function single (string $title, $id) {
        return view("front.singlePost", ['article' => Article::findOrFail($id)]);
    }

    public function front () {
        return view('front.blog',['articles' => Article::latest()->get()]);
    }
}
