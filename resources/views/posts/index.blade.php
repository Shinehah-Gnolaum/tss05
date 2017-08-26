@extends ('layouts.app')

@section ('content')

    <div>

      <h3 style="text-align:center">Posts</h3>
      <h3 style="text-align:center">{{ request()->month . " " . request()->year }}</h3>
    </div>

    <br>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          @include('layouts.success')
    
          <ul class="list-group">

            @foreach ($posts as $post)

              <li class="list-group-item">

                @include('posts.post')

              </li>

            @endforeach

          </ul>

          @include('posts.pager')
          
        </div><!-- /.blog-main -->

        @include('posts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->


@endsection