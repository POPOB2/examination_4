<?php
$row=$Mem->find($_GET['id']);
?>
<h2 class="ct">編輯會員資料</h2>
<table class="all" id="editForm">
    <tr>
        <td class="ct tt">帳號</td>
        <td class="pp"><?=$row['acc'];?></td>
    </tr>
    <tr>
        <td class="ct tt">密碼</td>
        <td class="pp"><?=str_repeat('*',strlen($row['pw']));?></td>
    </tr>
    <!-- 不用:累積交易額 -->
    <tr>
        <td class="ct tt">姓名</td>
        <td class="pp"><input type="text" name="name" id="name" value="<?=$row['name'];?>"></td>
    </tr>
    <tr>
        <td class="ct tt">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email" value="<?=$row['email'];?>"></td>
    </tr>
    <tr>
        <td class="ct tt">地址</td>
        <td class="pp"><input type="text" name="addr" id="addr" value="<?=$row['addr'];?>"></td>
    </tr>
    <tr>
        <td class="ct tt">電話</td>
        <td class="pp"><input type="text" name="tel" id="tel" value="<?=$row['tel']?>"></td>
    </tr>
</table>
<div class="ct">
    <button onclick="edit('classb_4_mem','mem',<?=$row['id'];?>)">編輯</button>
    <button onclick="location.reload()">重置</button>
    <button onclick="location.href='?do=mem'">取消</button>
</div>

<script>
    function edit(table,where,id){
        let form=$('#editForm input').serializeArray() //serializeArray()會把拿到的資料先map()一次, 再把key轉為表單的字串內容, 以陣列的方式呈現

	$.post("./api/edit.php", {table,form,id}, (res)=>{
        // console.log(res);
        location.href=`?do=${where}`
    })
}
</script>