@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-4">Campanha Alika
                <small>Light Novel</small>
            </h1>
            <hr>
            @each('partials.posts', $posts, 'post', 'defaults.noposts')
            {{ $posts->links() }}
        </div>
        <div class="col-md-4 d-none d-md-block">
            @include('includes.errors')
            @include('partials.sidebar')
        </div>

    </div>
    <!-- \.row -->
</div>
<!-- \.container -->
@endsection

@section('scripts')
    @parent
@endsection