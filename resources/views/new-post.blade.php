@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-4">Nova Postagem</h1>
            <hr>
            @include('partials.form-post')
        </div>
        <div class="col-md-4 d-none d-md-block">
            @include('includes.errors')
            @include('partials.sidebar')
        </div>
    </div>
    <!-- \.row -->
</div>
<!-- \.conteiner -->
@endsection

@section('scripts')
    @parent
@endsection