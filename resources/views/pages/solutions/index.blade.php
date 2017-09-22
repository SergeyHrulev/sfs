@extends('layouts.app')
@section('content')
    @include('layouts.right_sidenav')
    <div class="col s12" >
        <div class="section" style="height: 220px;background-color: #262F51;">
            <h1 class="center white-text" style="margin-top: 0;padding-top: 50px;">Решения для бизнеса</h1>
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
                        <img class="center-align" src="{{ asset('img/icons/solutions.jpg') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <a href="{{ url('solutions/lom-chernyh-i-cvetnyh-metallov') }}" style="color: #A17D45;">
                                Учет лома и отходов
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/icons/solutions.jpg') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Финансовое планирование</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/icons/solutions.jpg') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">CRM малый бизнес</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/icons/solutions.jpg') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Складской учет</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12 offset-l3">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/icons/solutions.jpg') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Документооборот</p>
                    </div>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="card">
                    <div class="card-image center-align">
                        <img class="center-align" src="{{ asset('img/icons/solutions.jpg') }}" alt="" style="height: 200px;">
                    </div>
                    <div class="card-content">
                        <p class="center">Логистика</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop