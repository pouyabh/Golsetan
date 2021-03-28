<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\Comment;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function add_flower_form()
    {
        return view('form_add_flower');
    }

    public function save_flower(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:30|min:5',
            'price' => 'required|max:30|min:5',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);
        $file = $request->file('image');
        $file_name = $file->getClientOriginalName();
        $imagepath = 'uploaded/';
        $file->move(public_path($imagepath), $file_name);
        Flower::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $file_name
        ]);
        return redirect('/form_add_flower')->with('msg', "Product Added");
    }

    public function Show_flower()
    {
        $flowers = Flower::all();
        return view('show_flowers', compact('flowers'));
    }

    public function destroy($id, $image)
    {
        unlink('uploaded/' . $image);
        Flower::find($id)->delete();
        return redirect('Show_flower');
    }

    public function edit($id)
    {

        $flower = Flower::find($id);
        return view('edit_form_flower', compact('flower'));
    }

    public function update($id)
    {
        $flower = Flower::find($id);
        $flower->name = \request('name');
        $flower->price = \request('price');
        $flower->save();
        return redirect('Show_flower');
    }

    public function Show_flowers_for_c()
    {
        $flowers = Flower::latest()->get();
        return view('flowers_for_client', compact('flowers'));
    }

    public function priceinfo($id)
    {
        $flowers = Flower::findOrFail($id);
        $comments = Comment::all();
//        dd($flowers);
        return view('price_info', compact('flowers', 'comments'));
    }

}
