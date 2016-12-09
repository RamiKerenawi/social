	<head>
		<title>
			My Own Posts
		</title>
	</head>
	
	<!-- import format & css from app.blade.php -->
	@extends("app")

	<!-- put this section format-merged with app.blade -->
	@section("content")
	
 
	<!-- Ajax Saving -->
	<script type="text/javascript">
	$(document).ready(function() {
		$('#submit').on('submit', function (e) {
			e.preventDefault();
			var title = $('#post').val();
			var author = $('#post_author').val();
			var published_at = 1//$('#published_at').val();
			$.ajax({
				type: "POST",
				url: host + '/posts/addme',
				data: {title: title, body: body, published_at: published_at},
				success: function( msg ) {
					$("#ajaxResponse").append("<div>"+msg+"</div>");
				}
			});
		});
	});
	
 
     
    $(document).ready(function() {
        $(".shcomments").click(function () {
              
			var myid = ($(this).attr('id'));
			alert("1"); 
			var urll = "/getcomments/1";
			
			alert(myid);
			
			$.ajax({
				type: "GET",
				dataType: "json",
				url: urll
				success: function(xhr){
					alert('updated');
				},
				error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.status);
				alert(xhr.responseText);
				}
				console.log(data);
				alert(data);
			
			});

          
		  });
            return false;
    });
     


 	
	</script>
	
	
	
	<h1>Posts</h1>

	<!-- Start Post Saving Form -->
	<div class="postform">
		{!! Form::open(['url' => 'addme']) !!}
			<div class="posthead row">
				<ul>
					<li >
						<a href="#">Write Post</a>
					</li>
					<li>
						<a href="#">Add Photo / Video</a>
					</li>
				</ul>
			</div>
			<div class="posttext row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					{{ Form::textarea('post',"",['size' => '30x5','class' => 'posttextarea row','placeholder'=>'what do you say...']) }}
				</div>
				<div class="col-md-1">
				</div>			
			</div>
			<div class="submitform row">
			<div class="col-md-8">
			</div>
			<div class="col-md-3">
						
				{{ Form::submit("Post") }}
				
			</div>
			<div class="col-md-1">
			</div>			
			</div>
		
		{!! Form::close() !!}
	</div>
	<!-- End Post Saving Form -->
	
	<!-- Start Displaying Posts and Comments -->
	@if (count($posts)) <!-- Check if there are any posts in DB, then Go -->
		<div>
		
		<?php $curpost=0; // Testing value to prevent duplicate showing for post content ?>
		@foreach ($posts as $post)
		
			<div class="wholepost">
				<div class="post_content">
					 @if ($curpost!=$post->ID) 
						<hr>
						{{ $post->post_content }}
						<!-- Start Comment Saving Form -->
						{!! Form::open(['url' => 'addcomment']) !!}
							{{ Form::hidden('post_id', $post->ID, array('id' => 'post_id')) }}
							{{ Form::text('comment',"",['placeholder'=>'Write a comment'])}}							
						{!! Form::close() !!}
						<!-- End Comment Saving Form -->						
					@endif
					<?php $curpost=$post->ID; ?>
					<div class="">

					</div>
				</div>
				
				<!--<a href="#" class="shcomments" id="<?php echo $post->ID; ?>">
					Show Comments
				</a>-->
				
				<!-- Start Displaying Comments for the current post-->
				<div class="comments">
					<ul>
						<li>
							@if ($post->comment_parent==0) <!-- if this main comment, show it under post directly -->
								<div class="comment">
									{{ $post->comment_content }}
								</div>
							@else <!-- if this reply to a comment, show it under its comment directly -->
								<!-- Start Displaying Replies to the current comment-->
								<div class="reply">
									{{ $post->comment_content }}
								</div>
								<!-- End Displaying Replies to the current comment-->
							@endif
							
						</li>
					</ul>
					
				</div>
				<!-- End Displaying Comments for the current post-->
			
			</div>
			
		@endforeach
		</div>
	@endif	
	<!-- End Displaying Posts and Comments -->
	
@stop <!-- الله يعطيك العافية-->