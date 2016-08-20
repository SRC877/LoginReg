<?php include_once ("db.php"); ?>
<?php
$user=$_POST['username'];
$pass=$_POST['password'];
$id=$_POST['id'];
$sql="INSERT into myphp values (".$id." ,'".$user."','".$pass."')";
$qury=mysql_query($sql);

if(!$qury)
{
echo"Failed".mysql_error();
echo"<br/> <a href='signupform.php'>SignUp</a>";
echo"<br/> <a href='index.php'>SignIn</a>";
}
else
{
echo"successful";
echo"<br/> <a href='signupform.php'>SignUp</a>";
echo"<br/> <a href='index.php'>SignIn</a>";
echo"<br/> <a href='logout.php'>LogOut</a>";
}
?>




