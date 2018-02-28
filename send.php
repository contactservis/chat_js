<?php
$user_id 	= $_GET['user_id'];
$user_name 	= $_GET['user_name'];
$data		= date('H:i j F');
$text 		= $data." ; ".$user_name." ; ".$_GET['send']; 
// открываем файл, если файл не существует,
//делается попытка создать его
//$fp = fopen("send/".$user_id.".txt", "w"); 
// записываем в файл текст
//fwrite($fp, $text); 
file_put_contents("send/".$user_id.".txt", PHP_EOL . $text, FILE_APPEND);
file_put_contents("send/allsend.txt", PHP_EOL . $text, FILE_APPEND);
// закрываем
//fclose($fp);

?>
<div class="alert alert-info" role="alert" style="margin: 15px;">
  <?php echo "<strong>".$data."</strong> ".$_GET['send']; ?>
</div>