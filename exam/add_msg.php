<?
require_once "./config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./back/add_msg.php" method="post">
        <label for="">Заголовок</label>
        <input type="text" name="header" id="">
        <label for="">Текст</label>
        <input type="text" name="text" id="">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>