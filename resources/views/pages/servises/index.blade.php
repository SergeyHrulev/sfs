@extends('layouts.app')
@section('content')
    @include('layouts.right_sidenav')
    <div class="section" style="height: 220px;background-color: #262F51;">
        <h1 class="center white-text" style="margin-top: 0;padding-top: 50px;">Услуги</h1>
        @include('helpers.hr')
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="section" style="padding: 30px 0 40px 0;">
                <h2 class="center">Быстрые и эффективные решения для различных отраслей бизнеса</h2>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/noimage.png') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Безопасность бизнеса</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/noimage.png') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Финансовый консалтинг</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/noimage.png') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Налоговый консалтинг</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/noimage.png') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Бухгалтерский аутсорсинг</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/noimage.png') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Кадровый аутсорсинг</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/noimage.png') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Программы обучения</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/noimage.png') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Экологическая безопасность</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/noimage.png') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Охрана труда</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop