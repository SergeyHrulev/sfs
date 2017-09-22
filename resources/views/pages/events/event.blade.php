@extends('layouts.app')
@section('content')
    @include('layouts.right_sidenav')
    @include('helpers.one_page_header', [
    'header' => $event[0]['title'],
    'img_path' => 'storage/' . $event[0]['photo'],
    'url1' => '#callback_form',
    'url2' => '#order_form',
    'button_text1' => 'ОБРАТНЫЙ ЗВОНОК',
    'button_text2' => 'ПРИНЯТЬ УЧАСТИЕ'
    ])
    <div class="container">
        <div class="row">
            {!! $event[0]['description'] !!}
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h4 class="center" style="color: #A17D45;">Адрес места проведения конференции</h4>
        </div>
    </div>
    @include('helpers.map')
    @include('helpers.register_form', ['url' => 'callback/order', 'title' => $event[0]['title']])
    @include('helpers.forms.callback_modal', ['url' => 'callback/order', 'title' => $event[0]['title']])
@stop