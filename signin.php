<?php include_once("db.php");
session_start();
session_destroy();
  ?>
<?php
$uname=$_POST['name'];
$pass=$_POST['pwd'];

$sql="SELECT count(*) FROM myphp WHERE(username='".$uname."'and password='".$pass."')";
$qury=mysql_query($sql);
$result=mysql_fetch_array($qury);

if($result[0]>0)
{
echo"successful login!";
$_SESSION['userName']=$uname;
echo"<br/> Welcome".$_SESSION['userName']."!";
echo"<br/> <a href='signupform.php'>SignUp</a>";
echo"<br/> <a href='signinform.php'>SignIn</a>";
echo"<br/> <a href='logout.php'>LogOut</a>";
}
else
{
echo"login failed!";
echo"<br/> <a href='signupform.php'>SignUp</a>";
echo"<br/> <a href='signinform.php'>SignIn</a>";
}
?>