<?php
require 'koneksi.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM tbchats WHERE id = ?");
$stmt->execute([$id]);

header("Location: re_chat.php");
?>