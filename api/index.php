<?php
error_reporting(E_ERROR);ini_set("display_errors","Off");
switch ($_GET('t')){
  case '阅读':
    include('阅读.php');
}
?>
