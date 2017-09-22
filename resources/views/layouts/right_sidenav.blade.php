<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
            <div class="background">
                <img src="{{ asset('img/nav_background.jpg') }}">
            </div>
            @if(Auth::check())
            <a href="#!user"><img class="circle" src="{{ asset('storage/' . Auth::user()->avatar)  }}"></a>
            <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
            <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
                @endif
        </div></li>
    @if(Auth::check())
    <li><a href="#!"><i class="material-icons">assignment_ind</i>Личный кабинет</a></li>
    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Выход</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form>
    </li>
    @else
        <li><a href="{{ url('login') }}">Войти</a></li>
        <li><a href="{{ url('register') }}">Зарегистрироваться</a></li>
    @endif
    <li><div class="divider"></div></li>
    <li><a href="{{ url('/') }}" class="subheader">Меню</a></li>
    {{ menu('right_nav') }}
</ul>