@extends('layouts.app')
@section('title', 'Login')


@section('content')
    <div class="page animsition vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="brand">
                <h2 class="brand-text">USER LOGIN</h2>
            </div>
            <p>Sign into your pages account</p>

            <form method="post" role="form" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"></div>
                    <label class="sr-only" for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                           value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label class="sr-only" for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="Password" required size="50">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox-custom checkbox-inline pull-left">
                        <input type="checkbox" id="inputCheckbox" name="remember">
                        <label for="inputCheckbox">Remember me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>
@endsection
