<?php

namespace App\Http\Controllers;

//suse App\Http\Requests\Request;
use Illuminate\Http\Request;

 
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



use App\Post;	
use App\Comment;	


//usse App\Http\Requests;

class PostsController extends Controller
{
    public function index()
		{
		$id=1;
		$posts = DB::table('posts')->get();
		 
		$posts = Post::with('comments', 'comments.user')->get();
		 
		
		$posts = DB::table('posts')->select("posts.post_content","posts.ID","comments.comment_content","comments.comment_parent")->leftjoin('comments', 'comments.comment_post_ID', '=', 'posts.ID')->orderBy("posts.ID")->get();
		
		return view("posts.index",compact("posts"));

		}
	
	public function addpost(Request $request)
	{
		$post = $request->all();
		//var_dump($post);
		$data = array(
						'post_content' => $post['post'],
						'post_author'  => 1
			         );
		$j = DB::table('posts')->insertGetId($data);
		if($j > 0)
		{
			return redirect('posts');
		}
		

	}
	public function addcomment(Request $request)
	{
		$comment = $request->all();
		//var_dump($post);
		$data = array(
						'comment_content' => $comment['comment'],
						'comment_post_ID'  => $comment['post_id']
			         );
		$j = DB::table('comments')->insertGetId($data);
		if($j > 0)
		{
			return redirect('posts');
		}
		

	}
	
	public function getcomment($id) {
		
		return "Commentesa";
		
	}
}
