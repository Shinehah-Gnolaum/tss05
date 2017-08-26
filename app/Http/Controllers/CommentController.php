<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Post $post)
    {
    	$this->validate(request(), [

    		'body' => 'required'

    	]);

    	$post->addComment();

    	return back()->with('flash-message', 'Your comment has been added.');
    }
}
