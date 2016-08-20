<?php
require 'facebook.php';
$facebook=new Facebook(array(
'appId'=>'502447916557209',
'secret'=>'5fd1cbb083333da2ad829e9b34515e27'
));
if($facebook->getUser()==0){
$login=$facebook->getLoginUrl();
echo"<a href='$login'>Login with facebook</a>";
}
else{
$api=$facebook->api('me');
echo"Hi".$api['name'];
echo"<br><a href='fblogout.php'>Logout</a>";
}
?>
