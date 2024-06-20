<?php
include_once "../base.php";
$DB=new DB($_GET['table']);
$chk=$DB->math('count','id',['acc'=>$_GET['acc'], 'pw'=>$_GET['pw']]);

if($chk>0){
    $_SESSION[$_GET['table']]=$_GET['acc'];
    if($_GET['table']=='classb_4_admin'){
        $_SESSION['pr']=$DB->find(['acc'=>$_GET['acc'],'pw'=>$_GET['pw']])['pr']; // 查詢該admin的權限
        $_SESSION['pr']=unserialize($_SESSION['pr']); // 轉為陣列
    }
    echo 1;
}else{
    echo 0;
}
?>