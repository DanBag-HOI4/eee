<?
require_once "./config.php";
$id = $_GET["id"];
$message = $connect->query("SELECT * FROM `messages` WHERE id = '$id'");
$message = mysqli_fetch_all($message);
foreach ($message as $item) {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./back/edit_msg.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <label for="">Заголовок</label>
        <input type="text" name="header" value="<?=$item[1]?>">
        <label for="">Текст</label>
        <input type="text" name="text" value="<?=$item[2]?>">
        
        <button type="submit">Отправить</button>
    </form>
</body>
</html>