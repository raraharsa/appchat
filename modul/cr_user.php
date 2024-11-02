<?php
require '../lib/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $stmt = $pdo->prepare("INSERT INTO tbusers (username, email) VALUES (?, ?)");
    $stmt->execute([$username, $email]);
    header("Location: re_users.php"); exit();// Tambahkan `exit` untuk menghentikan eksekusi setelah redirect.
}
if (file_exists('../lib/koneksi.php')) {
    require '../lib/koneksi.php';
} else {
    die("File koneksi.php tidak ditemukan di path '../lib/koneksi.php'");
}

?>
<form method="POST">
    Username: <input type="text" name="username" required>
    Email: <input type="email" name="email" required>
    <button type="submit">Simpan</button>
</form>
