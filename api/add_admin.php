<?php
include_once "../base.php";
$_POST['pr']=serialize($_POST['pr']); // 欲將資料存進DB不可用陣列, 用serialize()把傳過來的陣列內容轉為字串
$Admin->save($_POST);
to('../back.php?do=admin');
?>