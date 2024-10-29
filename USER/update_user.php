<?php
require 'koneksi.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = : ?");
$stmt->execute(['$id']);
$user = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
    $stmt->execute([$username, $email, $id]);

    header("Location: read_users.php");
}
?>

<form method="POST">
    Username: <input type="text" name="username" value="<?= $user['username'] ?>" required>
    Email: <input type="emaimo" name="username" value="<?= $user['username'] ?>" required>
    <button type="submit">Update</button>
</form>