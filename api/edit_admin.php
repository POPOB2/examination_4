<?php
include_once "../base.php";
$_POST['pr']=serialize($_POST['pr']); // 將POST的陣列內容轉為序列化字串才可以存在DB裡(DB不可放陣列)
$Admin->save($_POST); // id用hidden夾帶過來, pr經過序列化處理, 可直接用save()儲存, (save()有檢查陣列內容有無id之判斷)
to("../back.php?do=admin");
?>