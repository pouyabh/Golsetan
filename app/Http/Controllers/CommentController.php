<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function create($id)
    {
        $user_id = auth()->user()->id;
        //dd($user_id);

        Comment::create([
            'text' => request('comment'),
            'user_id' => $user_id,
            'flower_id' => $id
        ]);
        return back()->with('msg', 'Comment saved');
    }
}
