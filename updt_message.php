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

/* nanti ak benerin lagi ya teman2 */
<form method="POST">
    chat_id: <input type="text" name="chat_id" value="<?= $user['chat_id'] ?>" required>
    user_id: <input type="text" name="username" value="<?= $user['username'] ?>" required>
    message: <input type="emaimo" name="username" value="<?= $user['username'] ?>" required>    
    created_at: <input type="emaimo" name="username" value="<?= $user['username'] ?>" required>
    <button type="submit">Update</button>
</form>
