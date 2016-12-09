<?php

use App\testExtended\Comments;
use App\Post;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostsTest extends TestCase
{
 
    public function add_new_post() {
		
		$saved=false;
		
		
	    $post = new Post();
		
		$post_data['user_id'] = 1;
        $post_data['content'] = 'Lorim Ipsum';
        
		 
         
		
		$saved = $post->save($post_data);
		
		$this->assertEquals(true, $saved);

        
		
	}
	
	public function check_if_post_exists_in_db() 
	{
		$user_id=1;
		
		
	}
      


    /** @test */
    public function each_post_can_have_comments()
    {
        $user_id = 1;
        $post->ID  = 1229;
         
		
        $comment_data['user_id'] =  $user_id;
        $comment_data['text'] =  'This is a comment on the post';
        $comment_data['commen_post_id'] =  $post->ID;
        $Comments->add($comment_data);
		

        $comment_data['user_id'] =  $user_id;
        $comment_data['text'] =  'This is a second comment on the post';
        $comment_data['commen_post_id'] =  $post->ID;
        $Comments->add($comment_data);
		

         
        $post_comments = $post->comments;
        $this->assertEquals(2, count($post_comments));



    }
 

}


/*
class myPost () {
	
	public function save($post_data) {
		
		return true;
		
	}
	 
	public function post_found() {
		
		return true;
	}
}

class myComment () {
	
	 
	public function add($comment_data) {
		
		
	}
	
	public function comments() {
		
		return 2;
	}
}*/