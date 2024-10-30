<?php
require 'koneksi.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM tbchats WHERE id = ?");
$stmt->execute([$id]);
$chats = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chat_name = $_POST['chat_name']

    $stmt = $pdo->prepare("UPDATE tbchats SET chat_name = ? WHERE id = ?");
    $stmt->execute([$chat_name, $id]);

    header("Location: read_chats.php");
}
?>
 
 <form method="POST">
    chat_name: <input type="text" name="chat_name" value="<?=$chat_name['chat_name']?>" require>
    <button type="submit">Update</button>
 </form>