<?php


//if (empty($_POST['colors'])) {
//    setcookie("colors", '', time() - 20);
//}

if (!empty($_POST['colors'])) {
    setcookie("colors", $_POST['colors']);
    header('Location: http://localhost/3.php');
}

//print_r($_POST['colors']);
//echo '<hr>';
//print_r($_COOKIE["colors"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <form action="3.php" method="post">
        <select name="colors">
            <option <?if(isset($_COOKIE["colors"]) && $_COOKIE["colors"] == 'white'):?>selected="selected"<?endif;?>value="white">Выберите цвет</option>
            <option <?if(isset($_COOKIE["colors"]) && $_COOKIE["colors"] == 'yellow'):?>selected="selected"<?endif;?>value="yellow">Желтый</option>
            <option <?if(isset($_COOKIE["colors"]) && $_COOKIE["colors"] == 'red'):?>selected="selected"<?endif;?> value="red">Красный</option>
            <option <?if(isset($_COOKIE["colors"]) && $_COOKIE["colors"] == 'green'):?>selected="selected"<?endif;?>value="green">Зеленый</option>
            <option <?if(isset($_COOKIE["colors"]) && $_COOKIE["colors"] == 'black'):?>selected="selected"<?endif;?>value="black">Черный</option>
        </select>
        <p><input type="submit" value="Отправить"></p>
    </form>

    <p style="color: <?=!empty($_COOKIE["colors"]) ? $_COOKIE["colors"] : 'white'?>">
        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
    </p>

</body>
</html>