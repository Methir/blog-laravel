@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

            @include('partials.post')
        
        </div>
        <div class="col-md-4 d-none d-md-block">
            @include('partials.sidebar')
            @include('includes.errors')
        </div>
    </div>
    <!-- \.row -->
</div>
<!-- \.conteiner -->
@endsection

@section('scripts')
    @parent
@endsection