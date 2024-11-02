<?php
include 'lib/config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $stmt = $pdo->prepare("INSERT INTO tbusers (username, email) VALUES (?, ?)");
    $stmt->execute([$username, $email]);
    header("Location: re_users.php"); exit();// Tambahkan `exit` untuk menghentikan eksekusi setelah redirect.
} 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}



?>
<form method="POST">
    Username: <input type="text" name="username" required>
    Email: <input type="email" name="email" required>
    <button type="submit">Simpan</button>
</form>
