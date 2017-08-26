@extends ('layouts.app')

@section ('content')

	<div>

		<h3 style="text-align:center">Create a New Post</h3>

	</div>

	<br>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

			@include('layouts.errors')
			
        	<form method="POST" action="/posts/store">

        		{{ csrf_field() }}

			  <div class="form-group">
			    <label for="title">Title</label>
			    <input type="text" class="form-control" id="title" name="title" placeholder="Title of post goes here...">
			  </div>

			  <div class="form-group">
			    <label for="body">Body</label>
			    <textarea class="form-control" id="body" name="body" placeholder="Body of post goes here..."></textarea>
			  </div>
	
			  <button type="submit" class="btn btn-primary">Post</button>

			</form>

          	@include('posts.pager')
          
        </div><!-- /.blog-main -->

        @include('posts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->


@endsection