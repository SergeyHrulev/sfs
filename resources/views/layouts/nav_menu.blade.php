<div class="navbar-fixed">
    <nav style="background-color: #262F51;">
        <div class="nav-wrapper">
            <div class="container">
                <div class="row">
                    @if( !url('/home'))
                        <a class="brand-logo" href="{{ url('/') }}" style="color: #A17D45;">
                        <-</a>
                    @else
                        <a class="brand-logo" href="{{ url('/') }}" style="color: #A17D45;">
                     {{ config('app.name', 'Laravel') }}
                    @endif
                {{--{{ if (window.location.href != window.location.host ) { echo '<-'} else {config('app.name', 'Laravel')} }}--}}
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="white-text"><a href="tel: +78126276754"><i class="material-icons">phone</i></a></li>
                <li><a href="tel: +78126276754">(812) 627-6754</a></li>
                <li><a style="display: block!important;" href="#" data-activates="slide-out" class="button-collapse"><i
                                class="material-icons"
                                style="visibility: visible!important;
                                color: #A17D45;">menu</i></a></li>
            </ul>
                </div>
            </div>
        </div>
    </nav>
</div>