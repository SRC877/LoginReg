 <?php include_once("db.php"); ?>
<?php
session_start();
session_unset();
session_destroy();
if(!isset($_SESSION['userName']))
{
echo"Successfully logged out!<br/>";
echo"<br/><a href='index.php'>Back to home page</a>";
}
else
{
echo"Error Occured!<br/>";
}
?>