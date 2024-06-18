<form class="contact-form" method="post" id="form">

    <input class="contact-form-input _req" id="name" name="name" type="text" placeholder="Ваше ФИО...">
    <input class="contact-form-input _req _email" id="email" name="email" type="email" placeholder="Ваш email...">
    <input class="contact-form-input _req _phone" id="phone" name="phone" type="text" placeholder="Ваш номер телефона..." size="20">

    <div class="contact-form-if">

        <div class="contact-form-if-text">

            <div class="checkbox">
                <!-- Toggle Button Style 1 -->
                <label class="toggler-wrapper style-1">
                <input class="checkbox__input _req" type="checkbox" id="formAgreement" name="agreement" checked>
                <div class="toggler-slider">
                    <div class="toggler-knob"></div>
                </div>
                </label>
                <!-- End Toggle Button Style 1 -->
            </div>

            <p class="contact-form-input-paragraph _req">Вы соглашаетесь с <a class="contact-form-input-paragraph-a" href="/policy.php">политикой конфидециальности</a></p>

        </div>

        <button type="submit" class="contact-form-btn">Отправить</button>

    </div>

    <div class="contact-form-text">

        <div class="contact-form-text-paragraph">Вы можете написать нам</div>

        <ul>

            <li><a class="contact-form-text-a" href="#">Whatsapp</a></li>
            <li><a class="contact-form-text-a" href="#">Telegram</a></li>
            <li><a class="contact-form-text-a" href="#">VK</a></li>

        </ul>

    </div>

</form>