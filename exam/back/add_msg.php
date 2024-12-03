<?
require_once "../config.php";

$header = $_POST["header"];
$text = $_POST["text"];

$timestamp = date("Y-m-d");

$msg_add = $connect->query("INSERT INTO `messages`(`id`, `message_header`, `message_txt`, `timestamp`, `name`) VALUES (NULL, '$header', '$text', '$timestamp', NULL)");
header("Location: ../index.php");
?>