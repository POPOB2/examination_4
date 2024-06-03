<?php
include_once "../base.php";

$table=$_POST['table'];
$DB=new DB($table);

$chk=$DB->math('count','id',['acc'=>$_POST['acc']]); // 計算acc=POSTacc的帳號的id總數, 一但有就大於0

echo ($chk>0)?1:0;
?>