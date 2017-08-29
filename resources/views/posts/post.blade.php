          <div class="blog-post">

            <h2 class="blog-post-title">

              <a href="/posts/{{ $post->id }}">

                {{ $post->title }}

              </a>

            </h2>

            <p class="blog-post-meta">

              By: <strong>{{ $post->user->name }}</strong>;

              Created at: <strong>{{ $post->created_at->toFormattedDateString() }}</strong>;

              Updated at: <strong>{{ $post->updated_at->toFormattedDateString() }}</strong> <!-- <a href="#">Mark</a> -->

            </p>

            <p>{{ $post->body }}</p>

          </div><!-- /.blog-post -->
