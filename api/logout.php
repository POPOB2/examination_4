<?php
session_start();

// unset($_SESSION[$_GET['table']]);

switch($_GET['table']){
    case 'classb_4_mem':
        unset($_SESSION['classb_4_mem']);
    break;
    case 'classb_4_admin':
        unset($_SESSION['classb_4_admin']);
    break;
}

?>