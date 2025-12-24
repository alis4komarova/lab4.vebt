<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Моя страница</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h1>Формы обратной связи</h1>
    <form name="feedback" method="POST" action="https://httpbin.org/post">
        <p>
            ФИО:<br>
            <input type="text" placeholder="ФИО"><br>
            email:<br>
            <input type="email" placeholder="email"><br>
            Откуда узнали:<br>
            <input type="radio" name="from" value="fr">
            От друга <br>
            <input type="radio" name="from" value="in">
            Из интернета <br>
            <select size="1">
                <option selected disabled>
                    Тип обращения
                </option>
                <option value="1">
                    Жалоба
                </option>
                <option value="2">
                    Предложение
                </option>
            </select><br>
            <textarea rows="5" cols="40" name="text">
            </textarea><br>
            <input type="file" name="f"><br>
            <input type="checkbox" name="agree" value="yes">
            Даю согласие на обработку персональных данных
        </p>
        <p>
            <input type="submit" value="Отправить">
        </p>
    </form>
    <form name ="login" method="POST" action="https://httpbin.org/post">
        <p>
            Логин:<br>
            <input type="text" name="login" placeholder="логин">
        </p>
        <p>
            Пароль:<br>
            <input type="password" name="password" placeholder="пароль">
        </p>
        <input type="checkbox" name="agree" value="yes">
        Запомнить меня
        <p>
            <input type="submit" value="Войти">
        </p>
    </form>
</body>