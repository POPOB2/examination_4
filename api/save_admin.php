<?php
include_once "../base.php";
$_POST['pr']=serialize($_POST['pr']); // 欲將資料存進DB不可用陣列, 用serialize()把傳過來的陣列內容轉為字串
$Admin->save($_POST); // id用hidden夾帶過來, pr經過序列化處理, 可直接用save()儲存, (save()有檢查陣列內容有無id之判斷)
to('../back.php?do=admin');
?>