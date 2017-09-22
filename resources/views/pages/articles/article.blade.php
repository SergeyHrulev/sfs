@extends('layouts.app')
@section('content')
    @include('layouts.right_sidenav')
    <div class="container" style="margin-top: 50px;border: 1px solid #dfdfdf;border-radius: 10px;background-color: #f6f6f6;">
        <div class="row">
            <div class="col s9">
                <img src="{{ asset('storage/' . $article[0]['photo']) }}" class="responsive-img" alt="Статья">
                <h1 style="font-size: 2rem;">{{ $article[0]['title'] }}</h1>
                <ul class="collection">
                    <li class="collection-item avatar">
                        <img src="{{ asset('storage/' . $article[0]['userId']['avatar']) }}" alt="{{ $article[0]['userId']['name'] }}" class="circle">
                        <span class="title">Автор: {{ $article[0]['userId']['name'] }}</span>
                        <p>{{ $article[0]['userId']['email'] }}</p>
                    </li>
                </ul>
                <p style="padding: 0 10px 0 25px;">
                    {!! $article[0]['description'] !!}
                </p>

                @if($article[0]['commentId']->count())
                <h3>Комментарии</h3>
                <ul class="collection">
                    @foreach($article[0]['commentId'] as $comment)
                        <?php $author = App\User::where('id', $comment->user_id)->pluck('name', 'avatar'); ?>
                    <li class="collection-item avatar">
                        <img src="{{ asset('img/ava.jpg') }}" alt="Сергей Хрулев" class="circle">
                        <span class="title">Сергей Хрулев CEO SFSolution</span>
                        <p>
                            {{ $comment->description }}
                        </p>
                        <i class="material-icons">thumb_up</i><i class="material-icons">thumb_down</i>
                    </li>
                        @endforeach
                </ul>
                    @endif
            </div>
            <div class="col s3">
                <h5>ближайшие мероприятия</h5>
                <hr style="height: 2px; background-color: #0b0b0b;border: none;margin-right: 10px;">
                <ul class="collection" style="background-color: transparent!important;border: none;">
                    <li class="collection-item avatar" style="background-color: transparent;">
                        <div class="preview-article-card-date-wraper">
                            <div class="preview-article-card-date">
                                <span>22</span>
                                <span>мая</span>
                            </div>
                        </div>
                        <span>Трениг "Дорожная карта открытия бизнеса</span>
                    </li>
                    <li class="collection-item avatar" style="background-color: transparent;">
                        <div class="preview-article-card-date-wraper">
                            <div class="preview-article-card-date">
                                <span>22</span>
                                <span>мая</span>
                            </div>
                        </div>
                        <span>Трениг "Дорожная карта открытия бизнеса</span>
                    </li>
                    <li class="collection-item avatar" style="background-color: transparent;">
                        <div class="preview-article-card-date-wraper">
                            <div class="preview-article-card-date">
                                <span>22</span>
                                <span>мая</span>
                            </div>
                        </div>
                        <span>Трениг "Дорожная карта открытия бизнеса</span>
                    </li>
                </ul>
                <h5>тэги</h5>
                <hr style="height: 2px; background-color: #0b0b0b;border: none;margin-right: 10px;">
                <ul class="collection" style="background-color: transparent!important;border: none;">
                    <li class="collection-item avatar" style="background-color: transparent;">
                        <div class="preview-article-card-date-wraper">
                            <div class="preview-article-card-date">
                                <span>22</span>
                                <span>мая</span>
                            </div>
                        </div>
                        <span>Трениг "Дорожная карта открытия бизнеса</span>
                    </li>
                </ul>
                <h5>программные решения</h5>
                <hr style="height: 2px; background-color: #0b0b0b;border: none;margin-right: 10px;">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('img/programm1.jpg') }}" alt="">
                    </div>
                    <div class="card-content">
                        <p>
                            Любой организации от корпораций до небольших компаний, приходится сталкиваться с каждодневной рутинной работой: - оформление договоров, составление писем, соглашений, актов и прочих документов.
                        </p>
                    </div>
                    <div class="card-action">
                        <button class="btn orange darken-3">ПОСМОТРЕТЬ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop