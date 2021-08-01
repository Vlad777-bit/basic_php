<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Контакты</title>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/css.css">
</head>
<body>
<div class="container">

    <header>
       <a href="index.php"><img src="./public/img/e-bike.webp" alt="logo"></a> 
        <ul class="menu">
            <li><a class="menu_link" href="index.php">Главная</a></li>
            <li><a class="menu_link" href="catalog.php">Каталог</a></li>
            <li><a class="menu_link" href="contacts.php">Контакты</a></li>
        </ul>
    </header>

    <div class="content content_contact">
        <form action="#">
            <h1>Напишите нам</h1>
            <span>Телефон:</span> <br> <input type="text" class="input"><br>
            <span>Пароль:</span> <br> <input type="password" class="input"><br>
            <input type="submit" value="Вход" class="btn n_outline">
            <input type="submit" value="Регестрация" class="btn n_outline">
            <br>
            <br>
            <span>Имя:</span> <br> <input type="text" placeholder="Ваше имя" class="input"><br>
            <span>Email:</span> <br> <input type="email" placeholder="Ваш email" class="input"><br>
            <span>Тема:</span>
            <br>
            <select class="input">
                <option>Системная ошибка</option>
                <option>Жалоба</option>
                <option>Возврат товара</option>
                <option>Связаться с нами</option>
                <option>Другое</option>
            </select>
            <br> <input type="text" class="input"><br>
            <textarea cols="30" rows="7" placeholder="О чём Вы хотели сообщить нам?"></textarea>
            <br>
            <span>Телефон</span> <br> <input type="text" placeholder="необязательно" class="input"><br>
            <span>Обратная связь</span> <input type="checkbox"><br>
            <input type="submit" value="Отправить" class="btn">
            <input type="reset" value="Сбросить" class="btn">
        </form>
        <div class="address">
            <h1>Адрес</h1>
            <p class="address_too">
                <b>Наш телефон</b> - <i>89586471289</i><br>
                <b>Адрес</b>: <i>Бакунинская ул., 77, стр. 3, Москва</i><br>
                <b>Email</b>: <i>e-bikes@group.com</i>
                <br>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa2e351cff3ac4161db2746c9ed5b1f95e5312e95989d9d1bd9f0fbae97208067&amp;source=constructor"
                    width="517" height="339" frameborder="0"></iframe>
            </p>
        </div>
    </div>
    
    <footer>
	    &copy Все права защищены
    </footer>

</div>
</body>

</html>