<?php
require '../lib/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $stmt = $pdo->prepare("INSERT INTO tbusers (username, email) VALUES (?, ?)");
    $stmt->execute([$username, $email]);
    header("Location: read_users.php");
}
?>
<from method="POST">
    Username: <input type="text" name="username" required>
    Email: <input type="email" name="email" required>
    <button type="submit">Simpan</button>
</from>