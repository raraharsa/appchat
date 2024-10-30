<?php 
 require 'koneksi.php';

  $stmt = $pdo->query("SELECT *FROM tbchats");
  $chats = $stmt->fetchAll();

  $stmt = $pdo->query("SELECT *FROM tbusers");
  $users = $stmt->fetchAll();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chat_id = $_POST ['chat_id'];
        $user_id = $_POST ['user_id'];
        $message = $_POST ['message'];

        $stmt = $pdo->prepare("INSERT INTO tbmassages (chat_id, user_id, message) VALUES (?,?,?)");
        $stmt->execute([$chat_id, $user_id, $message]);

        header("Location: re_message.php?chat_id=$chat_id");
      
    }
?>

<form method="POST">
    chat:
     <select name="chat_id">
        <?php foreach ($chats as $chat): ?>
            <option value="<?=$chat['id']?>"><?=$chat['chat_name']?></option>
            <?php  endforeach; ?>
        </select>

        user:
        <select name="user_id">
            <?php foreach ($users as $user): ?>
                <option value="<?=$user['id']?>"><?=$user['username']?></option>
                <?php endforeach; ?>
            </select>

            message:
            <textarea name="message" required></textarea>
            <button type="submit">Kirim</button>
            </form>