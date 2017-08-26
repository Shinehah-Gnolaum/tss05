@extends ('layouts.app')

@section ('content')

    <div>

      <h3 style="text-align:center">Post</h3>

    </div>

    <br>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          @include('posts.post')

          <hr>

          <div class="comments">
            
            <ul class="list-group">

              @foreach ($post->comments as $comment)

                <li class="list-group-item">
                  
                  <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp</strong>

                  {{ $comment->body }}

                </li>

              @endforeach

            </ul>

          </div>

          <div>

            @include('layouts.errors')
            
            @include('layouts.success')

            <form method="POST" action="/posts/{{ $post->id }}/comment">

              {{ csrf_field() }}

              <div class="form-group">

                <textarea name="body" class="form-control" placeholder="Comment goes here..."></textarea>

              </div>

              <button type="submit" class="btn btn-primary">Add Comment</button>

            </form>

          </div>

          @include('posts.pager')
          
        </div><!-- /.blog-main -->

        @include('posts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->


@endsection