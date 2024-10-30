<?php
require 'koneksi.php';

$chat_id = $_GET['chat_id'];
$stmt = $pdo->prepare("SELECT * FROM messages WHERE chat_id = ?");
$stmt->execute([$chat_id]);
$messages = $stmt->fetchAll();

?>

<table>
    <tr>
        <th>ID</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
</table>