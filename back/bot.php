<?php
if(!empty($_POST['bot'])){
    $bot=$Bot->find(1); // 撈出更改的那一筆資料(id和bot)為$bot
    $bot['bot']=$_POST['bot']; // 將撈出的資料中的'bot'改為post過來的內容
    $Bot->save($bot); // 此時$bot有id欄位和變更內容後的bot欄位, 存入
}

?>

<h2 class="ct">編輯頁尾版權區</h2>
<form action="?do=bot" method="post">
    <table class="all">
        <tr>
            <td class="tt ct">頁尾宣告內容</td>
            <td class="pp">
                <input type="text" name="bot" value="<?=$Bot->find(1)['bot'];?>">
            </td>
        </tr>
    </table>

    <div class="ct">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>