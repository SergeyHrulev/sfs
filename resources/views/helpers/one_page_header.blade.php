<div class="parallax-container" style="height: 400px;padding-top: 120px;">
    <div class="col s6 offset-s6 center-align">
        <h1 class="center" style="color: #A17D45;">{{ $header }}</h1>
        @include('helpers.hr')
        @include('helpers.group_buttons', ['url1' => $url1, 'url2' => $url2])
    </div>
    <div class="parallax">
        <img src="{{ asset($img_path) }}" alt="{{ $header }}">
    </div>
</div>