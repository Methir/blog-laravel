@extends('layouts.tetra')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <div class="card my-4">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <small class="form-text text-muted">{{ $errors->first('name') }}</small>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>                
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <small class="form-text text-muted">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>                            
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <small class="form-text text-muted">{{ $errors->first('password') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>      
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary float-right">
                                Register
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @parent
@endsection