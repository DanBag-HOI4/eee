<?
require_once "../config.php";

$id = $_POST["id"];
$header = $_POST["header"];
$text = $_POST["text"];

$timestamp = date("Y-m-d");

$msg_add = $connect->query("UPDATE `messages` SET `message_header`='$header',`message_txt`='$text',`timestamp`='$timestamp',`name`='guest' WHERE id = '$id'");
header("Location: ../index.php");
?>