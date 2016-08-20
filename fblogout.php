<?php 
require'facebook.php';
$facebook=new Facebook(array(
'appId'=>'502447916557209',
'secret'=>'5fd1cbb083333da2ad829e9b34515e27'

));
$facebook->destroySession();
header('Location:index.php');
?>