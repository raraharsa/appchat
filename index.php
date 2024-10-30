<?php
session_start();
date_default_timezone_set('asia/jakarta');
include"lib/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
$page = ($_GET['page'])?$_GET['page']:null;
if (isset($page)){
  if ($page=='user') {
    include"modul/cr_user.php";
  }
  if ($page=='reuser') {
    include"modul/re_user.php";
  }
  if ($page=='upuser') {
    include"modul/updt_chat.php";
  }
  if ($page=='deluser') {
    include"modul/del_user.php";
  }
  if ($page=='message') {
    include"modul/cr_message.php";
  }
  if ($page=='remessage') {
    include"modul/re_message.php";
  }
  if ($page=='upmessage') {
    include"modul/updt_message.php";
  }
  if ($page=='delmessage') {
    include"modul/del_message.php";
  }
  if ($page=='chat') {
    include"modul/cr_chat.php";
  }
  if ($page=='rechat') {
    include"modul/re_chat.php";
  }
  if ($page=='upchat') {
    include"modul/updt_chat.php";
  }
  if ($page=='delchat') {
    include"modul/del_chat.php";
  }
 
}else{
    include"index.php";
  }

?>

</body>
</html>
// belum kelar ini besok ku lanjutkan - arin