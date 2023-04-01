<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Программист 1С-Битрикс</title>
</head>

<body>
    <div style="width: 100%;">
        <div style="margin:0 auto; width:600px; text-align: center;">

            <img width="500" src="https://www.1c-bitrix.ru/images/content_ru/about/1c-bitrix-logo.png" alt="">

            <h1>Программист 1С-Битрикс</h1>
            <ul style="list-style-type:none">
                <li> - Разработка сайтов на CMS Bitrix</li>
                <li> - Тех поддержка </li>
                <li> - СЕО Оптимизация</li>
            </ul>

            <?php if (!empty($_COOKIE['loginName'])) { ?>
                <div> <?php echo 'Доброй пожаловать ' .  $_COOKIE['loginName'] . '!' ?> </div>
                <div> <a href="exit.php"> Выход </div>
            <? } else { ?>
                <form action="post.php" method="POST">
                    <input name="login_name" type="text" placeholder="Введите имя..." />
                    <input type="submit" value="Отправить" />
                </form>
            <? } ?>

        </div>
    </div>
      
</body>

</html>