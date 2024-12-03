<?php
require_once "./config.php";
$id = $_GET["id"];

$del_msg = -$connect->query("DELETE FROM messages WHERE id = '$id'");
header("Location: ./index.php");

?>