            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('storage/'.$post->image) }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{!! nl2br(str_limit($post->content, 250, '...')) !!}</p>
                    <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-primary">Leia Mais &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Postado em {{ $post->created_at }} por
                    <a href=" {{ route('home.author', ['id' => $post->user->id]) }} ">{{ $post->user->name }}</a>
                </div>
            </div>
