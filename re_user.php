<?php
require 'koneksi.php';

$stmt = $pdo->query("SELECT * FROM tbusers");
$users = $stmt->fetchAll();
?>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($users as $user):?>
        <tr>
            <td><?= $user['id']?></td>
            <td><?= $user['username']?></td>
            <td><?= $user['email']?></td>
            <td>
                <a href="updt_user.php?id=<?= $user['id']?>">Edit</a>
                <a href="del_user.php?id=<?= $user['id']?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach;?>
</table>

