@extends('layouts.app')
@section('content')
    @include('layouts.right_sidenav')
    @include('helpers.one_page_header', [
        'header' => 'Программа учета лома',
        'img_path' => 'img/photos/lom.jpg',
        'url1' => '/home',
        'url2' => '/lom',
        'button_text1' => 'ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ',
        'button_text2' => 'ДЕМО-ВЕРСИЯ ПРОГРАММЫ'
    ])
    {{--<div class="parallax-container" style="height: 400px;padding-top: 120px;">--}}
        {{--<div class="col s6 offset-s6 center-align">--}}
                {{--<h1 class="center" style="color: #A17D45;">Программа учета лома.</h1>--}}
                {{--@include('helpers.hr')--}}
                {{--@include('helpers.group_buttons', ['url1' => "/home", 'url2' => "/lom"])--}}
        {{--</div>--}}
        {{--<div class="parallax">--}}
            {{--<img src="{{ asset('img/photos/lom.jpg') }}" alt="Программа учета лома">--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container">
        <div class="row">
            <div class="section" style="padding: 70px 0 70px 0;">
                <h2 class="center">Удобство. Оперативность. Доступность</h2>
            </div>
            <div class="col l6 s12">
                <h4>Интуитивное меню</h4>
                <p>
                    Для пользования системой нет необходимости в проведении обучения. Сотруднику, работающему с системой
                    достаточно ознакомиться с краткой видео инструкцией, чтобы он сразу мог приступить к работе.
                </p>
            </div>
            <div class="col l6 s12">
                <img src="{{ asset('img/noimage2.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col l6 s12">
                <img src="{{ asset('img/noimage2.png') }}" alt="">
            </div>
            <div class="col l6 s12">
                <h4>Полный комплект документов</h4>
                <p>
                    Для пользования системой нет необходимости в проведении обучения. Сотруднику, работающему с системой
                    достаточно ознакомиться с краткой видео инструкцией, чтобы он сразу мог приступить к работе.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col l6 s12">
                <h4>Обмен данными с 1С</h4>
                <p>
                    Для пользования системой нет необходимости в проведении обучения. Сотруднику, работающему с системой
                    достаточно ознакомиться с краткой видео инструкцией, чтобы он сразу мог приступить к работе.
                </p>
            </div>
            <div class="col l6 s12">
                <img src="{{ asset('img/noimage2.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="section">
        <div class="parallax-container">
            @include('helpers.forms.call_back_form', ['url' => 'callback/order', 'title' => 'Заказ на консультацию по программе Лом'])
            <div class="parallax">
                <img src="{{ asset('img/photos/order_body1.jpg') }}" alt="Форма заказа">
            </div>
        </div>
    </div>
    @include('helpers.map')
    @include('helpers.soglasie')



@stop