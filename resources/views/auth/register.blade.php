@extends('layouts.app')

@section('content')
    <section id="register" class="standard-section eight columns offset-by-two">
                    <form role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-control{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>
                                <input id="name" type="text" class="u-full-width" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-control{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="u-full-width" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-control{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="u-full-width" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-control">
                            <label for="password-confirm">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="u-full-width" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-control">
                                <button type="submit" class="button-primary">
                                    Register
                                </button>
                        </div>
                    </form>
    </div>
    </section>
@endsection
