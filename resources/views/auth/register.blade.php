@extends('layouts.app')
@include('layouts.right_sidenav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 offset-m2" style="padding: 5rem 0;">

                <h1 class="center" style="color: #A17D45;margin: 30px 0;">Зарегистрироваться</h1>

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="input-field{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                            <label for="name">Ваше имя</label>

                            <div class="col-md-6">


                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-field {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                            <label for="email">Адрес электронной почты</label>

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

                        <div class="input-field">
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                            <label for="password-confirm">Подтверждение пароля</label>

                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="input-field">
                                <button type="submit" class="btn login-btn">
                                    Зарегистрироваться
                                </button>
                        </div>
                    </form>


        </div>
    </div>
</div>
@endsection
