@extends('layouts.app')
@include('layouts.right_sidenav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 offset-m2" style="padding: 5rem 0;">
            <div class="panel panel-default">
                <h1 class="center" style="color: #A17D45;">Войти в систему</h1>
                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="input-field {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">Ваш email</label>

                            <div class="col-md-6">


                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-field {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="password">Пароль</label>

                            <div class="col-md-6">


                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--<div class="input-field">--}}

                                <p>
                                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" style="color: #A17D45;">
                                        Запомнить меня
                                    </label>
                                </p>

                        {{--</div>--}}


                            <div class="input-field">
                                <button type="submit" class="btn login-btn">
                                    Войти
                                </button>

                                <a class="btn forgot-pswd-btn" href="{{ route('password.request') }}">
                                    Забыли пароль?
                                </a>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
