<div id="callback_form" class="modal">
    <div class="modal-content">
        <form action="{{ url($url) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="comment" value="{{ $title }}">
            <div class="row">
                <div class="input-field col s8">
                    <masked-input v-model="phone" mask="\+\7 (111) 1111-11" placeholder="номер телефона" />
                    <example></example>
                    {{--<input name="phone" type="tel" class="validate" required>--}}
                    {{--<label for="phone">Телефон для связи</label>--}}
                </div>
                <div class="input-field col s4">
                    <input type="submit" class="btn submit-btn" value="Заказать звонок">
                </div>
            </div>
            <p class="center">*Оставляя заявку, вы <a href="{{ url('/soglasie') }}" target="_blank" style="color: #A17D45;">СОГЛАШАЕТЕСЬ</a> на обработку персональных данных</p>
        </form>
    </div>
</div>