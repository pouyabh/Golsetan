<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function form_add_news()
    {
        return view('form_add_news');
    }

    public function add_news(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|max:30|min:5',
            'body' => 'required|max:30|min:5',
        ]);
        News::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return redirect('/form_add_news')->with('msg', "News Added");
    }

    public function Show_news()
    {
        $news = News::all();
        return view('show_news', compact('news'));
    }

    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect('Show_news');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('edit_form_news', compact('news'));
    }

    public function update($id)
    {
        $news = News::find($id);
        $news->title = \request('title');
        $news->body = \request('body');
        $news->save();
        return redirect('Show_news');
    }

    public function show_news_f_c()
    {
        $news = News::latest()->get();
        return view('news_for_client', compact('news'));
    }
}
