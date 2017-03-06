<?php

//function html_flash_message() {
//    if (!empty($_COOKIE["flash_msg"])) {
//        $html = "<p style='color: red;'>Headers already sent</p>";
//        return $html;
//    }
//}


if (!empty($_POST['fio']) && !empty($_POST['message'])) {

    if (!isset($_COOKIE["user"]) || !isset($_COOKIE["qty"])) {
        setcookie("user", '1', time() + 60);
        setcookie("qty", '1');
    }

    $count = $_COOKIE["qty"];

    if ($count < 3) {
        $count++;
        setcookie("qty", $count);
        header('Location: http://localhost/1_2.php');
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?/*=html_flash_message();*/?>

    <? if (isset($_COOKIE['user']) && $_COOKIE["qty"] == 3): ?>
        <p style="color: red;">Headers already sent</p>
    <? endif ?>

    <form action="1_2.php" method="post">
        <label>Fio</label><br/>
        <input type="text" name="fio" <?=isset($_COOKIE['user']) && $_COOKIE["qty"] == 3 ? 'readonly' : ''?> required>
        <br/><br/>
        <label>Message</label><br/>
        <textarea name="message" <?=isset($_COOKIE['user']) && $_COOKIE["qty"] == 3 ? 'readonly' : ''?> required></textarea>
        <p><input type="submit" value="Send"></p>
    </form>




</body>
</html>