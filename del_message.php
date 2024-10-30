<?php
require 'koneksi.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM tbmessages WHERE id = ?");
$stmt->execute([$id]);

header("Location: re_message.php");
?>