<?php
include_once "../base.php";
$DB=new DB($_POST['table']);
$id=$_POST['id'];
$row=$DB->find($id);
dd($row);
dd($_POST['form']);
foreach($_POST['form'] as $col){ 
    $row[$col['name']] = $col['value']; // 陣列賦值時替換的是該key的value, 而非拿value的值替換掉key的值

}
$DB->save($row);

?>