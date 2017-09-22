@extends('layouts.app')
@section('content')
    @include('layouts.right_sidenav')
    <div class="section" style="height: 220px;background-color: #262F51;">
        <h1 class="center white-text" style="margin-top: 0;padding-top: 50px;">Статьи</h1>
        @include('helpers.hr')
    </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($articles as $article)
            @include('cards.main_page_article')
                @endforeach
        </div>
    </div>
    @stop