<?
require_once "./config.php";
$messages = $connect->query("SELECT * FROM `messages`");
$messages = mysqli_fetch_all($messages);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <tr>
    <th>Header</th>
    <th>Text</th>
    <th>Date</th>
    <th>Name</th>
  </tr>
  <?
  foreach ($messages as $item) {
    ?>
        <div class="messages">
            <tr>
                <td><?=$item[1]?></td>
                <td><?=$item[2]?></td>
                <td><?=$item[3]?></td>
                <td><?=$item[4]?></td>
                <td><a href="./edit_msg.php?id=<?=$item[0]?>"><button>редактировать заявку</button></a></td>
                <td><a href="./del_msg.php?id=<?=$item[0]?>"><button>удалить заявку</button></a></td>
            </tr>
        </div>
    <?
  }
  ?>
</table>

<a href="./add_msg.php"><button>Добавить заявку</button></a>
</body>
</html>