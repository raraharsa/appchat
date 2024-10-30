<?php
require 'koneksi.php';

$stmt = $pdo->query("SELECT * FROM tbchats");
$chats = $stmt->fetchAll();
?>
<table>
    <tr>
        <th>ID</th>
        <th>Chat Name</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($chats as $chat):?>
        <tr>
            <td><?= $chat['id']?></td>
            <td><?= $chat['chat_name']?></td>
            <td>
                <a href="updt_chat.php?id=<?= $chat['id']?>">Edit</a>
                <a href="del_chat.php?id=<?= $chat['id']?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach;?>
</table>

