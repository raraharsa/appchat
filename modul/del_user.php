<?php
require 'koneksi.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM tbusers WHERE id = ?");
$stmt->execute([$id]);

header("Location: re_user.php");
?>