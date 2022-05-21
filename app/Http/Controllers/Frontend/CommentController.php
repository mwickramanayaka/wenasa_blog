<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            $validator = Validator::make($request->all(), [
                'comment_body' => 'required|string'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('message', 'Comment Area is Mandetory');
            }
            $post = Post::where('slug', $request->post_slug)->where('status', '0')->first();
            if ($post) {
                Comment::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);
                return redirect()->back()->with('message', 'Comment added successfully');
            } else {
                return redirect()->back()->with('message', 'No such Post found');
            }
        } else {
            return redirect('login')->with('message', 'Login First to Comment ');
        }
    }

    public function destroy(Request $request)
    {
        if (Auth::check()) {
            $comment = Comment::where('id', $request->comment_id)
                ->where('user_id', Auth::user()->id)
                ->first();
                if($comment){
                    $comment->delete();
                    return response()->json([
                        'status' => 200,
                        'message' => 'Comment Deleted Successfully '
                    ]);
                }else{
                    return response()->json([
                        'status' => 500,
                        'message' => 'Something went Wrong'
                    ]);
                }
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Login to Delete this Comment '
            ]);
        }
    }
}
