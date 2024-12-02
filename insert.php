<?php
include('connection.php');
if(isset($_POST['add']))
{
	$firstname=$_POST['Name'];
	$email=$_POST['Email'];
	$comment=$_POST['comment'];
$sql="INSERT INTO web(Name,Email, comment)VALUES('$firstname','$email','$comment')";
$result=mysqli_query($conn,$sql);
if(!$result)
{
	die(mysqli_error());
}
else
{
echo "successfully inserted "."<br>"."Thank You For Your Comment";
}
}
?>