@extends('layouts.app')
@include('layouts.right_sidenav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 offset-m2" style="padding: 5rem 0;">

                <h1 class="center" style="color: #A17D45;">Сброс пароля</h1>
                <div class="section">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="input-field {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                            <label for="email">Адрес электронной почты</label>

                            <div class="col m6">


                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-field col m10 offset-m2">
                                <button type="submit" class="btn login-btn" style="width: 70%;">
                                    Отправить ссылку для сброса пароля
                                </button>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
@endsection
