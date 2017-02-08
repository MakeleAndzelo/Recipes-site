@extends('layouts.app')

@section('content')
    <section id="login" class="standard-section eight columns offset-by-two">
        <div class="row">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-control">
                                <label for="email">E-Mail Address</label>
                                 <input id="email" type="email" class="u-full-width" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                    <div class="row">  
                        <div class="form-control">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                        <input id="password" type="password" class="u-full-width" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                </div>
                            </div>

                            <div class="form-control">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                            </div>

                            <div class="form-control">
                                    <button type="submit" class="button-primary">
                                        Login
                                    </button>

                                    <a class="button" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                            </div>
                        </form>
        </div>
        </section>
@endsection
