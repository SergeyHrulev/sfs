<form style="padding-top: 190px;" action="{{ url($url) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="comment" value="{{ $title }}">
    <h4 class="center white-text">Оставьте номер телефона и мы вам перезвоним</h4>
    <div class="row">
        <div class="input-field col s4 offset-s3">
            <masked-input v-model="phone" mask="\+\7 (111) 1111-11" placeholder="номер телефона" />
            {{--<input name="phone" type="tel" class="validate" placeholder="номер телефона">--}}
        </div>
        <div class="input-field col s4">
            <input type="submit" class="btn submit-btn" value="Заказать звонок">
        </div>
    </div>
    <p class="center white-text">*Оставляя заявку, вы <a href="#soglasie">СОГЛАШАЕТЕСЬ</a> на обработку персональных данных</p>
</form>