<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

        
            <div class="col-xs-12 col-lg-6 col-md-5 col-sm-12">
                
                <h3 style="text-align: center;">Обратная связь</h3>
            <form class="contact_form" action="/models/contact-form.php" method="post">
	<p>
            <label for="name">*Имя:</label>
            <input type="text"  name="name" placeholder="Введите ваше имя" required />
        </p>
        <p>
            <label for="email">*Email:</label>
            <input type="email" name="email" placeholder="Введите e-mail" required />
        
        </p>
        <p>
            <label for="tel">Телефон:</label>
            <input type="tel" name="tel" placeholder="Введите номер телефона" />
           
        </p>

        <p>
            <label for="message">*Текст сообщения:</label>
            <textarea name="message" cols="40" rows="6" required ></textarea>
        </p>

        <p >
        	<button class="submit" type="submit">Отправить сообщение</button>
        </p>
    <label style="text-align:right; width:90%;">* - обязательное поле</label><br>
</form>
            </div>

            
            <div class="col-xs-12 col-lg-6 col-md-7 col-sm-12">
                <h3 style="text-align: center;">Адрес</h3>
                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Ho5dK7rktHKH30ZwI1rfpU1wl-eGd6H2&width=500&height=400&lang=ru_RU&sourceType=constructor"></script>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>