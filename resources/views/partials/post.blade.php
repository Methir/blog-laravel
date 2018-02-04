    <!-- Title -->
    <h1 class="mt-4"> {{ $post->title }} </h1>

    <!-- Author -->
    <p class="lead">
        por
        <a href="{{ route('home.author', ['id' => $post->user->id]) }}"> {{ $post->user->name }} </a>
    </p>
    <hr>
        <!-- Date/Time -->
        <p> Postado em {{ $post->created_at }} </p>
        @auth
            @can('modify', $post)
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-post">
                    Editar
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#destroy-post">
                    Deletar
                </button>
            @endcan
        @endauth
    <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ asset('storage/'.$post->image) }}" alt="">
    <hr>
        <!-- Post Content -->
        @br($post->content)

    <hr>
    <div class="card my-4">
        <h5 class="card-header">Deixe seu comentário:</h5>
        <div class="card-body">
            <form method="POST" action="{{ route('comments.store') }}">
                <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="content" rows="3" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" @guestdisable >Enviar</button>
            </form>
        </div>
    </div>

    @forelse($post->comments as $comment)
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">{{ $comment->user->name}}</h5>
                {{ $comment->content }}
            </div>
        </div>
    @empty
        @include('defaults.nocomments')
    @endforelse

    @include('modals.edit-post')
    @include('modals.destroy-post')