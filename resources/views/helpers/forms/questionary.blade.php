<div id="mail_consult" class="modal" style="max-height: 80%;height: 80%;">
    <div class="modal-content" style="height: 90%;">
        <p>Представьтесь и напишите ваш вопрос</p>
        <form action="{{ url('mail/consult') }}" method="post">
            {{ csrf_field() }}
            <div class="input-field">
                <input type="text" name="name" id="name" class="validate">
                <label for="name">Ваше имя</label>
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Ваша электронная почта</label>
            </div>
            <div class="input-field">
                <input type="tel" name="phone" id="phone" class="validate">
                <label for="phone">Ваш телефон</label>
            </div>
            <div class="input-field">
                <textarea id="comment" name="comment" class="materialize-textarea"></textarea>
                <label for="comment">Ваш вопрос</label>
            </div>
            <div class="input-field">
                <input type="submit" class="btn login-btn" value="Отправить вопрос">
            </div>
        </form>
        <p class="center">*Оставляя заявку, вы <a href="{{ url('/soglasie') }}" target="_blank" style="color: #A17D45;">СОГЛАШАЕТЕСЬ</a> на обработку персональных данных</p>
    </div>
    {{--<div class="modal-footer">--}}
        {{--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>--}}
    {{--</div>--}}
</div>