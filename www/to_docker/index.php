<html>
<head>
    <title>Тест docker'а</title>
</head>
<body>
    <?php
    echo '<h3>Вариант подключения к базе данных с неправильным паролем</h3> <p>';

    $link = @mysqli_connect('mysql', 'root', 'adminasd');

    echo 'Попытка подключения к базе данных...<p>';
    if (!$link)
        echo 'Ошибка соединения';
    else
        echo 'Успешно соединились';

    echo '<p><h3>Вариант подключения к базе данных с правильным паролем</h3><p>';

    $link = @mysqli_connect('mysql', 'root', 'admin');

    echo 'Попытка подключения к базе данных...<p>';
    if (!$link)
        echo 'Ошибка соединения';
    else
        echo 'Успешно соединились';

    mysqli_close($link);

    ?>

</body>
</html>