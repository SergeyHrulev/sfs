<div class="container">
    <div class="row">
        <form action="{{ url($url) }}" id="order_form" method="post" class="col s12 l6 offset-l3">
            {{ csrf_field() }}
            <input type="hidden" name="comment" value="{{ $title }}">
            <div class="input-field col s12 l12">
                <input id="name" name="name" type="text" class="validate">
                <label for="name">Ваше имя</label>
            </div>
            <div class="input-field col s12 l12">
                <input id="phone" name="phone" type="text" class="validate">
                <label for="phone">Ваш телефон</label>
            </div>
            <div class="input-field col s12 l12">
                <input type="text" id="email" name="email" class="validate">
                <label for="email">Ваше email</label>
            </div>
            <div class="input-field col s12 l12">
                <input type="submit" class="btn submit-btn" value="ЗАРЕГИСТРИРОВАТЬСЯ">
            </div>
        </form>
        <div class="col s12 l6 offset-l3">
        <p class="center">*Оставляя заявку, вы <a href="{{ url('/soglasie') }}" target="_blank" style="color: #A17D45;">СОГЛАШАЕТЕСЬ</a> на обработку персональных данных</p>
        </div>
    </div>
</div>
<div id="notification" class="modal">
    <div class="modal-content">
        <p>{{ \Session::get('order_save') }}</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Закрыть</a>
    </div>
</div>