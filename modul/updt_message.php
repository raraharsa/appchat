<?php
require 'koneksi.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM tbmessages WHERE id = : ?");
$stmt->execute(['$id']);
$user = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chat_id = $_POST['chat_id'];
    $user_id = $_POST['user_id'];
    $message = $_POST['message'];
    $created_at = $_POST['created_at'];
    

    $stmt = $pdo->prepare("UPDATE tbmessages SET chat_id = ?, user_id = ?, message = ?, created_at = ?, WHERE id = ?");
    $stmt->execute([$chat_id, $user_id, $message, $created_at]);

    header("Location: re_message.php");
}
?>


<form method="POST">
    chat_id: <input type="text" name="chat_id" value="<?= $user['chat_id'] ?>" required>
    user_id: <input type="text" name="user_id" value="<?= $user['user_id'] ?>" required>
    message: <input type="text" name="message" value="<?= $user['message'] ?>" required>    
    created_at: <input type="date" name="created_at" value="<?= $user['created_at'] ?>" required>
    <button type="submit">Update</button>
</form>
