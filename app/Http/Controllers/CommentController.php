<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers;
use JWTAuth;
class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
    	$comment = new Comment();
        
        $comment->user_comment=Auth::user()->name;
    	$comment->comment=$request->comment;
    	$comment->save();

    	return back();
    }

	public function approval(Request $request)
    {
    	$comment = Comment::find($request->CommentId);
    	$approveVal=$request->approve;
    	if ($approveVal=='on') {
    		$approveVal=1;
    	}
    	else
    	{
    		$approveVal=0;
    	}
    	
    	$comment->approve=$approveVal;
    	$comment->save();

    	return back();
    }

   
   
}
